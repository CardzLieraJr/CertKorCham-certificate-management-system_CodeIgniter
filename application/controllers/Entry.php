<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Entry extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('example_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'messages' => $this->_message_get(),
			'title' => 'Welcome to the Codeigniter Datatables Example page'
		);

		//	$this->load->view('head_section');
		$this->load->view('example_list_ajax', $data);
		//	$this->load->view('footer');
	}

	public function read($id)
	{
		$row = $this->example_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'RefNo' => $row->RefNo,
				'RefCode' => $row->RefCode,
				'IssuedIn' => $row->IssuedIn,
				'GoodsConsignedFrom' => $row->GoodsConsignedFrom,
				'Address1' => $row->Address1,
				'GoodsConsignedTo' => $row->GoodsConsignedTo,
				'Address2' => $row->Address2,
				'Address3' => $row->Address3,

				'DepartureDate' => $row->DepartureDate,
				'VesselName' => $row->VesselName,
				'PortOfLoading' => $row->PortOfLoading,
				'PortOfDischarge' => $row->PortOfDischarge,
				'ItemNumber' => $row->ItemNumber,
				'NumberPackage' => $row->NumberPackage,
				'Des1' => $row->Des1,
				'Des2' => $row->Des2,
				'Des3' => $row->Des3,
				'Des4' => $row->Des4,
				'Des5' => $row->Des5,

				'OriginCriterion' => $row->OriginCriterion,
				'GrossWeight1' => $row->GrossWeight1,
				'GrossWeight2' => $row->GrossWeight2,
				'GrossWeight3' => $row->GrossWeight3,




				'InvoiceNumDate' => $row->InvoiceNumDate,
				'Country' => $row->Country,
				'ImportingCountry' => $row->ImportingCountry,
				'Place' => $row->Place,
				'Date' => $row->Date,
				'Sign' => $row->Sign,
				'CertDateStamp' => $row->CertDateStamp,
			);
			$this->load->view('example_read', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('dashboard'));
		}
	}

	public function create()
	{
		$data = array(
			'page_title' => 'Add New Entry',
			'button' => 'Create',
			'action' => site_url('entry/create_action'),
			'id' => NULL,
			'RefNo' => set_value('RefNo'),
			'RefCode' => set_value('RefCode'),
			'IssuedIn' => set_value('IssuedIn', 'THE REPUBLIC OF KOREA'),
			'GoodsConsignedFrom' => set_value('GoodsConsignedFrom'),
			'Address1' => set_value('Address1'),
			'GoodsConsignedTo' => set_value('GoodsConsignedTo'),
			'Address2' => set_value('Address2'),
			'Address3' => set_value('Address3'),

			'DepartureDate' => set_value('DepartureDate'),
			'VesselName' => set_value('VesselName'),
			'PortOfLoading' => set_value('PortOfLoading', 'INCHEON PORT, KOREA'),
			'PortOfDischarge' => set_value('PortOfDischarge', 'SOUTH MANILA PORT, PHILIPPINES'),
			'ItemNumber' => set_value('ItemNumber', '1'),
			'NumberPackage' => set_value('NumberPackage', '///////////////////////'),
			'Des1' => set_value('Des1', '[HS CODE : 8702.90]HYUNDAI GRAND STAREX'),
			'Des2' => set_value('Des2', '1 PC 1 UN 3,010 KG 3,010 KG'),
			'Des3' => set_value('Des3', 'HYUNDAI GRAND STAREX NO: KMJWA37KBHU877399'),
			'Des4' => set_value('Des4', 'SPECIAL PURPOSE VEHICLE FOR THE DISABLED'),
			'Des5' => set_value('Des5', 'NO: KMJWA37KBHU877399'),

			'OriginCriterion' => set_value('OriginCriterion', 'RVC 45%'),
			'GrossWeight1' => set_value('GrossWeight1', '3,010 KG' . "\n" . '16,421 USD'),
			'GrossWeight2' => set_value('GrossWeight2', '3,010 KG' . "\n" . '16,421 USD'),
			'GrossWeight3' => set_value('GrossWeight3', '3,010 KG' . "\n" . '16,421 USD'),

			'InvoiceNumDate' => set_value('InvoiceNumDate', 'HA20180124-02' . "\n" . '2018-01-24'),
			'Country' => set_value('Country', 'THE REPUBLIC OF KOREA'),
			'ImportingCountry' => set_value('ImportingCountry', 'THE REPUBLIC OF THE PHILIPPINES'),
			'Place' => set_value('Place', 'SEOUL KOREA'),
			'Date' => set_value('Date'),
			'Sign' => set_value('Sign'),
			'CertDateStamp' => set_value('CertDateStamp'),
		);

		$this->load->view('example_form', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'RefNo' => $this->input->post('RefNo', TRUE),
				'RefCode' => $this->input->post('RefCode', TRUE),
				'IssuedIn' => $this->input->post('IssuedIn', TRUE),
				'GoodsConsignedFrom' => $this->input->post('GoodsConsignedFrom', TRUE),
				'Address1' => $this->input->post('Address1', TRUE),
				'GoodsConsignedTo' => $this->input->post('GoodsConsignedTo', TRUE),
				'Address2' => $this->input->post('Address2', TRUE),
				'Address3' => $this->input->post('Address3', TRUE),

				'DepartureDate' => $this->input->post('DepartureDate', TRUE),
				'VesselName' => $this->input->post('VesselName', TRUE),
				'PortOfLoading' => $this->input->post('PortOfLoading', TRUE),
				'ItemNumber' => $this->input->post('ItemNumber', TRUE),
				'NumberPackage' => $this->input->post('NumberPackage', TRUE),
				'Des1' => $this->input->post('Des1', TRUE),
				'Des2' => $this->input->post('Des2', TRUE),
				'Des3' => $this->input->post('Des3', TRUE),
				'Des4' => $this->input->post('Des4', TRUE),
				'Des5' => $this->input->post('Des5', TRUE),

				'OriginCriterion' => $this->input->post('OriginCriterion', TRUE),
				'GrossWeight1' => $this->input->post('GrossWeight1', TRUE),
				'GrossWeight2' => $this->input->post('GrossWeight2', TRUE),
				'GrossWeight3' => $this->input->post('GrossWeight3', TRUE),



				'InvoiceNumDate' => $this->input->post('InvoiceNumDate', TRUE),
				'Country' => $this->input->post('Country', TRUE),
				'ImportingCountry' => $this->input->post('ImportingCountry', TRUE),
				'Place' => $this->input->post('Place', TRUE),
				'Date' => $this->input->post('Date', TRUE),
				'Sign' => $this->input->post('Sign', TRUE),
				'CertDateStamp' => $this->input->post('CertDateStamp', TRUE),
			);

			$this->example_model->insert($data);
			$this->_message_set('Create Record Success');
			redirect(site_url('dashboard'));
		}
	}

	public function update($id)
	{
		$row = $this->example_model->get_by_id($id);

		if ($row) {

			$data = array(
				'page_title' => 'Edit Entry Details',
				'button' => 'Update',
				'action' => site_url('entry/update_action'),

				'id' => set_value('id', $row->id ?? ''),
				'RefNo' => set_value('RefNo', $row->RefNo ?? ''),
				'RefCode' => set_value('RefCode', $row->RefCode ?? ''),
				'IssuedIn' => set_value('IssuedIn', $row->IssuedIn ?? ''),
				'GoodsConsignedFrom' => set_value('GoodsConsignedFrom', $row->GoodsConsignedFrom ?? ''),
				'Address1' => set_value('Address1', $row->Address1 ?? ''),
				'GoodsConsignedTo' => set_value('GoodsConsignedTo', $row->GoodsConsignedTo ?? ''),
				'Address2' => set_value('Address2', $row->Address2 ?? ''),
				'Address3' => set_value('Address3', $row->Address3 ?? ''),

				'DepartureDate' => set_value('DepartureDate', $row->DepartureDate ?? ''),
				'VesselName' => set_value('VesselName', $row->VesselName ?? ''),
				'PortOfLoading' => set_value('PortOfLoading', $row->PortOfLoading ?? ''),
				'PortOfDischarge' => set_value('PortOfDischarge', $row->PortOfDischarge ?? ''),
				'ItemNumber' => set_value('ItemNumber', $row->ItemNumber ?? ''),
				'NumberPackage' => set_value('NumberPackage', $row->NumberPackage ?? ''),
				'Des1' => set_value('Des1', $row->Des1 ?? ''),
				'Des2' => set_value('Des2', $row->Des2 ?? ''),
				'Des3' => set_value('Des3', $row->Des3 ?? ''),
				'Des4' => set_value('Des4', $row->Des4 ?? ''),
				'Des5' => set_value('Des5', $row->Des5 ?? ''),

				'OriginCriterion' => set_value('OriginCriterion', $row->OriginCriterion ?? ''),
				'GrossWeight1' => set_value('GrossWeight1', $row->GrossWeight1 ?? ''),
				'GrossWeight2' => set_value('GrossWeight2', $row->GrossWeight2 ?? ''),
				'GrossWeight3' => set_value('GrossWeight3', $row->GrossWeight3 ?? ''),

				'InvoiceNumDate' => set_value('InvoiceNumDate', $row->InvoiceNumDate ?? ''),
				'Country' => set_value('Country', $row->Country ?? ''),
				'ImportingCountry' => set_value('ImportingCountry', $row->ImportingCountry ?? ''),
				'Place' => set_value('Place', $row->Place ?? ''),
				'Date' => set_value('Date', $row->Date ?? ''),
				'Sign' => set_value('Sign', $row->Sign ?? ''),
				'CertDateStamp' => set_value('CertDateStamp', $row->CertDateStamp ?? ''),
			);

			$this->load->view('example_form', $data);
		} else {

			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('dashboard'));
		}
	}

	public function update_action()
	{
		//$this->_rules();

		//if ($this->form_validation->run() == FALSE) {
		// $this->update($this->input->post('id', TRUE));
		// } else {
		$data = array(
			'RefNo' => $this->input->post('RefNo', TRUE),
			'RefCode' => $this->input->post('RefCode', TRUE),
			'IssuedIn' => $this->input->post('IssuedIn', TRUE),
			'GoodsConsignedFrom' => $this->input->post('GoodsConsignedFrom', TRUE),
			'Address1' => $this->input->post('Address1', TRUE),
			'GoodsConsignedTo' => $this->input->post('GoodsConsignedTo', TRUE),
			'Address2' => $this->input->post('Address2', TRUE),
			'Address3' => $this->input->post('Address3', TRUE),

			'DepartureDate' => $this->input->post('DepartureDate', TRUE),
			'VesselName' => $this->input->post('VesselName', TRUE),
			'PortOfLoading' => $this->input->post('PortOfLoading', TRUE),
			'PortOfDischarge' => $this->input->post('PortOfDischarge', TRUE),
			'ItemNumber' => $this->input->post('ItemNumber', TRUE),
			'NumberPackage' => $this->input->post('NumberPackage', TRUE),
			'Des1' => $this->input->post('Des1', TRUE),
			'Des2' => $this->input->post('Des2', TRUE),
			'Des3' => $this->input->post('Des3', TRUE),
			'Des4' => $this->input->post('Des4', TRUE),
			'Des5' => $this->input->post('Des5', TRUE),

			'OriginCriterion' => $this->input->post('OriginCriterion', TRUE),
			'GrossWeight1' => $this->input->post('GrossWeight1', TRUE),
			'GrossWeight2' => $this->input->post('GrossWeight2', TRUE),
			'GrossWeight3' => $this->input->post('GrossWeight3', TRUE),

			'InvoiceNumDate' => $this->input->post('InvoiceNumDate', TRUE),
			'Country' => $this->input->post('Country', TRUE),
			'ImportingCountry' => $this->input->post('ImportingCountry', TRUE),
			'Place' => $this->input->post('Place', TRUE),
			'Date' => $this->input->post('Date', TRUE),
			'Sign' => $this->input->post('Sign', TRUE),
			'CertDateStamp' => $this->input->post('CertDateStamp', TRUE),
		);

		$this->example_model->update($this->input->post('id', TRUE), $data);
		$this->_message_set('Update Record Success');
		redirect(site_url('dashboard'));
		//}
	}

	public function delete($id)
	{
		$row = $this->example_model->get_by_id($id);

		if ($row) {
			$this->example_model->delete($id);
			$this->_message_set('Delete Record Success');
			redirect(site_url('dashboard'));
		} else {
			$this->_message_set('Record Not Found');
			redirect(site_url('dashboard'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('RefNo', ' ', 'required');
		$this->form_validation->set_rules('RefCode', ' ', 'required');
		$this->form_validation->set_rules('IssuedIn', ' ', 'required');
		$this->form_validation->set_rules('GoodsConsignedFrom', ' ', 'required');
		$this->form_validation->set_rules('Address1', ' ', 'required');
		$this->form_validation->set_rules('GoodsConsignedTo', ' ', 'required');
		$this->form_validation->set_rules('Address2', ' ', 'required');
		$this->form_validation->set_rules('Address3', ' ', 'required');

		$this->form_validation->set_rules('DepartureDate', ' ', 'required');
		$this->form_validation->set_rules('VesselName', ' ', 'required');
		$this->form_validation->set_rules('PortOfLoading', ' ', 'required');
		$this->form_validation->set_rules('PortOfDischarge', ' ', 'required');
		$this->form_validation->set_rules('ItemNumber', ' ', 'required');
		$this->form_validation->set_rules('NumberPackage', ' ', 'required');
		$this->form_validation->set_rules('Des1', ' ', 'required');
		$this->form_validation->set_rules('Des2', ' ', 'required');
		$this->form_validation->set_rules('Des3', ' ', 'required');
		$this->form_validation->set_rules('Des4', ' ', '');
		$this->form_validation->set_rules('Des5', ' ',);


		$this->form_validation->set_rules('OriginCriterion', ' ', 'required');
		$this->form_validation->set_rules('GrossWeight1', ' ', 'required');
		$this->form_validation->set_rules('GrossWeight2', ' ', 'required');
		$this->form_validation->set_rules('GrossWeight3', ' ', 'required');


		$this->form_validation->set_rules('InvoiceNumDate', ' ', 'required');
		$this->form_validation->set_rules('Country', ' ', 'required');
		$this->form_validation->set_rules('ImportingCountry', ' ', 'required');
		$this->form_validation->set_rules('Place', ' ', 'required');
		$this->form_validation->set_rules('Date', ' ', 'required');
		$this->form_validation->set_rules('Sign', ' ');
		$this->form_validation->set_rules('CertDateStamp', ' ', 'required');
		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_message('is_unique', 'The value you entered already exists.');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function deletechecks()
	{
		$idarray = $this->input->post('id', TRUE);
		/*    	echo '<pre>';
		var_dump($idarray);
		echo '</pre>';
		exit;*/
		$n = $this->example_model->deletearray($idarray);
		$this->_message_set($n . ' Records Have Been Successfully Deleted');
		redirect(site_url('dashboard'));
	}

	public function _message_get()
	{
		if (!empty($_SESSION['messages'])) {
			$messages = $_SESSION['messages'];
			$_SESSION['messages'] = '';
			return $messages;
		}
		return '';
	}

	public function _message_set($messages)
	{
		$_SESSION['messages'] = $messages;
	}

	public function dataTable()
	{
		$this->load->library('Datatable', array('model' => 'example_dt', 'rowIdCol' => 'id'));

		$jsonArray = $this->datatable->datatableJson(array(
			'datetaken' => 'date',
			'id' => 'action1',
		));
		$this->output->set_header("Pragma: no-cache");
		$this->output->set_header("Cache-Control: no-store, no-cache");
		$this->output->set_content_type('application/json')->set_output(json_encode($jsonArray));
	}
};
