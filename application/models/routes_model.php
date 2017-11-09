<?php

class routes_model extends CI_model
{
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_routes()
    {
    	$query = $this->db->get('routes');

    	return $query->result_array();
    }

    function get_name_of_ships()
    {
    	$this->db->select('name');
    	$this->db->from('ships');

    	$query = $this->db->get();

    	return $query->result_array();
    }

    function get_name_of_ports()
    {
    	$this->db->select('name');
    	$this->db->from('ports');

    	$query = $this->db->get();

    	return $query->result_array();
    }

    function create_route()
    {
    	$data = array(
    		'name_ship' => $this->input->post('name_ship'),
    		'start_port' => $this->input->post('start_port'),
    		'destination_port' => $this->input->post('destination_port'),
    		'cargo' => $this->input->post('cargo'),
    		'date_time_departure' => $this->input->post('date_time_departure')
    	);

    	$query = $this->db->insert('routes', $data);
    }
}