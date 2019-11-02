<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {
		
    function __construct() {
        parent::__construct();

        $this->load->model('Kota_model');
		$this->load->model('Provinsi_model');
    }
	
	function index()
	{
		$data['kotaList'] = $this->Kota_model->read();

		$this->load->view('header');       
        $this->load->view('Kota_list', $data);
        $this->load->view('footer');
	}

	function addNew()
	{
		$data['dropdownProvinsi'] = $this->Provinsi_model->getDropdown();

		$this->load->view('header');
		$this->load->view('Kota_new', $data);
		$this->load->view('footer');
	}
	
	function create()
	{
		$dataPOST['id_prov'] = $this->input->post('id_prov');
		$dataPOST['id_city'] = $this->input->post('id_city');
		$dataPOST['nama'] = $this->input->post('nama');
		$this->Kota_model->create($dataPOST);
		redirect('index');
	}
	
	function open($Id)
	{
		$data['kota'] = $this->Kota_model->open($Id);
		$data['dropdownProvinsi'] = $this->Provinsi_model->getDropdown();
		
		$this->load->view('Kota_edit', $data);
	}
	
	function update()
	{
		$id = $this->input->post('Id');
		$dataPOST['id_city'] = $this->input->post('id_city');
		$dataPOST['nama'] = $this->input->post('nama');
		$dataPOST['id_prov'] = $this->input->post('id_prov');
		$this->Kabupaten_model->update($dataPOST, $id);
		redirect('Kota');
	}
	
	function delete($id)
	{
		$this->Kota_model->delete($id);
		
		redirect('Kota');
	}
}