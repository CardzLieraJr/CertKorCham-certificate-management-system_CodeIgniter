<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_Database extends CI_Controller {

    public function show_all_data() {
        $this->db->select('*');
        $this->db->from('search');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function show_data($data) {
        $this->db->select('*');
        $this->db->from('search');
        $this->db->where('refno',$this->input->post('refno'));
        $this->db->where('refcode',$this->input->post('refcode'));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
