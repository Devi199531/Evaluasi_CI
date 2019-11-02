<?php defined('BASEPATH') OR exec('No direct script access allowed');

/**
 * 
 */
class Provinsi extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');

		$this->load->model('prov_model');
		$this->load->model('city_model');
	}

	public function index()
	{
		$data['provinsi']= $this->prov_model->get_prov();

		$this->load->view('provinsi/header');
		$this->load->view('provinsi/daftar', $data);
		$this->load->view('provinsi/footer');

	}

	public function kota()
	{
		$data['city']= $this->city_model->get_city();

		$this->load->view('provinsi/header');
		$this->load->view('provinsi/kota', $data);
		$this->load->view('provinsi/footer');

	}

	public function create()
	{
		$this->load->view('provinsi/header');
		$this->load->view('provinsi/create');
		$this->load->view('provinsi/footer');

	}

	public function store()
    {
        $this->form_validation->set_rules('name', 'Nama Provinsi', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('provinsi/header');
			$this->load->view('provinsi/create');
			$this->load->view('provinsi/footer');
		}

		$data = $this->input->post();
		$result = $this->prov_model->store($data);

		if ($result)
		{
			redirect('provinsi');
		}
    }

    public function edit($id)
    {
        $data['provinsi'] = $this->prov_model->get_prov($id);
        $this->load->view('provinsi/header');
        $this->load->view('provinsi/edit',$data);
        $this->load->view('provinsi/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('name', 'Nama Provinsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            //redirect(site_url(uri_string()), 'refresh');
        } else {
            $this->prov_model->update($_POST['name']);
            redirect('provinsi');
        }
    }

    public function delete($id)
    {
        $this->buku_model->delete($id);
        redirect('provinsi');
    }

}