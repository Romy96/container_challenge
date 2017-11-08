<?php
class container_ships extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('container_ships_model');

		if(!isset($_SESSION['logged_in']))
		{
			$this->session->set_flashdata('ERROR','U moet eerst inloggen!');
            redirect('login', 'Refresh');
		}

		if(isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 2)
		{
			$this->session->set_flashdata('ERROR','U heeft geen toegang op deze pagina!');
            redirect('index', 'Refresh');
		}
		elseif (isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 4) {
			$this->session->set_flashdata('ERROR','U heeft geen toegang op deze pagina!');
            redirect('index', 'Refresh');
		}

	}

	public function index()
	{
		$data['ships'] = $this->container_ships_model->get_ships();

		if(empty($data))
		{
           	$this->session->set_flashdata('ERROR','Er zijn geen schepen gevonden!');
            redirect('index', 'Refresh');
		}

		$this->load->view('templates/header');
		$this->load->view('container_ships', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('IMO_number', 'IMO_number', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('year_build', 'year_build', 'required');
		$this->form_validation->set_rules('home_port', 'home_port', 'required');
		$this->form_validation->set_rules('home_country', 'home_country', 'required');
		$this->form_validation->set_rules('MMSI_number', 'MMSI_number', 'required');
		$this->form_validation->set_rules('length_m', 'length_m', 'required');
		$this->form_validation->set_rules('width_m', 'width_m', 'required');
		$this->form_validation->set_rules('depth', 'depth', 'required');
		$this->form_validation->set_rules('load_capacity_ton', 'load_capacity_ton', 'required');
		$this->form_validation->set_rules('length_hold_m', 'length_hold_m', 'required');
		$this->form_validation->set_rules('width_hold_m', 'width_hold_m', 'required');
		$this->form_validation->set_rules('height_hold_m', 'height_hold_m', 'required');
		$this->form_validation->set_rules('max_hazardous_substances_x', 'max_hazardous_substances_x');
		$this->form_validation->set_rules('hold_max_total_floor_load_ton', 'hold_max_total_floor_load_ton');
		$this->form_validation->set_rules('hold_max_column_floor_load_ton', 'hold_max_column_floor_load_ton');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('container_ships/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->container_ships_model->create_ship();
			redirect('container_ships', 'Refresh');
		}
	}

	public function edit($id = NULL)
	{
		$data['ship'] = $this->container_ships_model->get_ship($id);

		if(empty($data))
		{
			$this->session->set_flashdata('ERROR','De gekozen schip kan niet gevonden worden!');
            redirect('container_ships', 'Refresh');
		}

		$this->form_validation->set_rules('IMO_number', 'IMO_number', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('year_build', 'year_build', 'required');
		$this->form_validation->set_rules('home_port', 'home_port', 'required');
		$this->form_validation->set_rules('home_country', 'home_country', 'required');
		$this->form_validation->set_rules('MMSI_number', 'MMSI_number', 'required');
		$this->form_validation->set_rules('length_m', 'length_m', 'required');
		$this->form_validation->set_rules('width_m', 'width_m', 'required');
		$this->form_validation->set_rules('depth', 'depth', 'required');
		$this->form_validation->set_rules('load_capacity_ton', 'load_capacity_ton', 'required');
		$this->form_validation->set_rules('length_hold_m', 'length_hold_m', 'required');
		$this->form_validation->set_rules('width_hold_m', 'width_hold_m', 'required');
		$this->form_validation->set_rules('height_hold_m', 'height_hold_m', 'required');
		$this->form_validation->set_rules('max_hazardous_substances_x', 'max_hazardous_substances_x');
		$this->form_validation->set_rules('hold_max_total_floor_load_ton', 'hold_max_total_floor_load_ton');
		$this->form_validation->set_rules('hold_max_column_floor_load_ton', 'hold_max_column_floor_load_ton');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('container_ships/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->container_ships_model->edit_ship($id);
			redirect('container_ships', 'Refresh');
		}
	}

	public function delete($id = NULL)
	{
		$this->container_ships_model->delete_ship($id);
		redirect('container_ships', 'Refresh');
	}
}
?>