<?php defined('BASEPATH') OR exec('No direct script access allowed');

/**
 * 
 */
class City extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');

		$this->load->model('city_model');
	}

	public function index()
	{
		$data['city']= $this->city_model->get_prov();

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
        $this->form_validation->set_rules('name', 'Nama Kota', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('city/header');
			$this->load->view('city/create');
			$this->load->view('city/footer');
		}

		$data = $this->input->post();
		$result = $this->city_model->store($data);

		if ($result)
		{
			redirect('provinsi');
		}
    }

    public function edit($id)
    {
        $data['city'] = $this->city_model->get_city($id);
        $this->load->view('city/header');
        $this->load->view('city/edit',$data);
        $this->load->view('city/footer');
    }

    public function update()
    {

        $this->form_validation->set_rules('name', 'Nama Kota', 'required');

        if ($this->form_validation->run() === FALSE) {
            //redirect(site_url(uri_string()), 'refresh');
        } else {
            $this->city_model->update($_POST['name']);
            redirect('provinsi');
        }
    }

    public function delete($id)
    {
        $this->city_model->delete($id);
        redirect('provinsi');
    }

}