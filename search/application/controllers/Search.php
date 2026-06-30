<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('search_database');
     }

    function index()
     {
        $this->load->view('header');
        $this->load->view('search_view');
        $this->load->view('footer');
     }

     function data_table(){
        $data['show_table'] = $this->view_table();
        $this->load->view('header');
        $this->load->view('data_view', $data);
        $this->load->view('footer');
     }

    function view_table(){
        $result = $this->search_database->show_all_data();
         if ($result != false) {
             return $result;
         } else {
             return 'Database is empty !';
         } 
     }

    function results(){
        $refno = $this->input->post('refno');
        $refcode = $this->input->post('refcode');
        $data = array(
            'refno' => $refno,
            'refcode' => $refcode
        );
        if ($refno == "" || $refcode == "") {
            $data['error_message'] = "The Reference No. and Reference Code that you have entered are invalid.";
        }
        else {
            $result = $this->search_database->show_data($data);
            if ($result != false) {
                $data['result_display'] = $result;
            }
            else { $data['result_display'] = "No record found !"; }
        }

        $this->load->view('header');
        $this->load->view('results_view', $data);
        $this->load->view('footer');

    }
}