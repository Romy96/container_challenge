<?php

class routes extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('routes_model');

		if(!isset($_SESSION['logged_in']))
		{
			$this->session->set_flashdata('ERROR','U moet eerst inloggen!');
            redirect('login', 'Refresh');
		}

		if(isset($_SESSION['employeeId']) && $_SESSION['role_id'] != 4)
		{
			$this->session->set_flashdata('ERROR','U heeft geen toegang op deze pagina!');
            redirect('index', 'Refresh');
		}
	}

	public function index()
	{
		$data['routes'] = $this->routes_model->get_routes();

		if(empty($data))
		{
			$this->session->set_flashdata('ERROR','Er zijn geen routes gevonden!');
			redirect('index', 'Refresh');
		}

		$this->load->view('templates/header');
		$this->load->view('routes', $data);
		$this->load->view('templates/footer');
	}

	public function create_route()
	{
		$data['ships'] = $this->routes_model->get_name_of_ships();
		$data['ports'] = $this->routes_model->get_name_of_ports();

		$this->form_validation->set_rules('name_ship', 'name_ship', 'Required');
		$this->form_validation->set_rules('start_port', 'start_port', 'Required');
		$this->form_validation->set_rules('destination_port', 'destination_port', 'Required');
		$this->form_validation->set_rules('cargo', 'cargo', 'Required');
		$this->form_validation->set_rules('date_time_departure', 'date_time_departure', 'Required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('routes/create_route', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->routes_model->create_route();
			redirect('routes', 'Refresh');
		}
	}

	public function create_port()
	{
		$this->form_validation->set_rules('name', 'name', 'Required');
		$this->form_validation->set_rules('adress', 'adress', 'Required');
		$this->form_validation->set_rules('country', 'country', 'Required');
		$this->form_validation->set_rules('phone_number', 'phone_number', 'Required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('routes/create_port');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->routes_model->create_port();
			redirect('routes', 'Refresh');
		}
	}


}
?>