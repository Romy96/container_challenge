<?php

class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('form');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() == FALSE)
        {
        	$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
        }
		else
		{
			$this->load->model('login_model');
			$this->login_model->check_user();
			redirect('index', 'Refresh');
		}
	}
}
?>