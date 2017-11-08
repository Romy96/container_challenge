<?php
class container_ships_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function get_ships()
    {
    	$query = $this->db->get('ships');

    	return $query->result_array();
    }

    function create_ship()
    {
    	$data = array(
    		'IMO_number' => $this->input->post('IMO_number'),
    		'name' => $this->input->post('name'),
    		'year_build' => $this->input->post('year_build'),
    		'home_port' => $this->input->post('home_port'),
    		'home_country' => $this->input->post('home_country'),
    		'MMSI_number' => $this->input->post('MMSI_number'),
    		'length_m' => $this->input->post('length_m'),
    		'width_m' => $this->input->post('width_m'),
    		'depth' => $this->input->post('depth'),
    		'load_capacity_ton' => $this->input->post('load_capacity_ton'),
    		'length_hold_m' => $this->input->post('length_hold_m'),
    		'width_hold_m' => $this->input->post('width_hold_m'),
    		'height_hold_m' => $this->input->post('height_hold_m'),
    		'max_hazardous_substances_x' => $this->input->post('max_hazardous_substances_x'),
    		'hold_max_total_floor_load_ton' => $this->input->post('hold_max_total_floor_load_ton'),
    		'hold_max_column_floor_load_ton' => $this->input->post('hold_max_column_floor_load_ton')
    	);

    	$query = $this->db->insert('ships', $data);
    }

    function get_ship($id = '')
    {
    	$query = $this->db->get_where('ships', array('id' => $id));

    	return $query->row_array();
    }

    function edit_ship($id = '')
    {
    	$data = array(
    		'id' => $this->input->post('id'),
    		'IMO_number' => $this->input->post('IMO_number'),
    		'name' => $this->input->post('name'),
    		'year_build' => $this->input->post('year_build'),
    		'home_port' => $this->input->post('home_port'),
    		'home_country' => $this->input->post('home_country'),
    		'MMSI_number' => $this->input->post('MMSI_number'),
    		'length_m' => $this->input->post('length_m'),
    		'width_m' => $this->input->post('width_m'),
    		'depth' => $this->input->post('depth'),
    		'load_capacity_ton' => $this->input->post('load_capacity_ton'),
    		'length_hold_m' => $this->input->post('length_hold_m'),
    		'width_hold_m' => $this->input->post('width_hold_m'),
    		'height_hold_m' => $this->input->post('height_hold_m'),
    		'max_hazardous_substances_x' => $this->input->post('max_hazardous_substances_x'),
    		'hold_max_total_floor_load_ton' => $this->input->post('hold_max_total_floor_load_ton'),
    		'hold_max_column_floor_load_ton' => $this->input->post('hold_max_column_floor_load_ton')
    	);

    	$query = $this->db->where('id', $id);

    	return $this->db->update('ships', $data);
    }

    function delete_ship($id = '')
    {
    	$this->db->delete('ships', array('id' => $id));
    }
}
