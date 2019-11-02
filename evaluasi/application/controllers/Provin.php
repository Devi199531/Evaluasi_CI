<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provin extends CI_Controller {
		
    function __construct() {
        parent::__construct();

        $this->load->model('Provinsi_model');
    }
	
	function index()
	{
		$data['provinsiList'] = $this->Provinsi_model->read();
		       
        $this->load->view('header');
        $this->load->view('Provinsi_list', $data);
        $this->load->view('footer');
	}
	
	function addNew()
	{
		$this->load->view('header');
		$this->load->view('Provinsi_new');
		$this->load->view('footer');
	}
	
	function create()
	{
		$dataPOST['id_prov'] = $this->input->post('id_prov');
		$dataPOST['name'] = $this->input->post('name');
		$this->Provinsi_model->create($dataPOST);
		redirect('Provin/addNew');
	}
	
	function open($Id)
	{
		$data['provinsi'] = $this->Provinsi_model->open($Id);
		$this->load->view('Provinsi_edit', $data);
	}
	
	function update()
	{
		$id = $this->input->post('Id');
		$dataPOST['id_prov'] = $this->input->post('id_prov');
		$dataPOST['name'] = $this->input->post('name');
		$this->Provinsi_model->update($dataPOST, $id);
		redirect('Provin');
	}
	
	function delete($id)
	{
		$this->Provinsi_model->delete($id);
		
		redirect('Provin');
	}
}