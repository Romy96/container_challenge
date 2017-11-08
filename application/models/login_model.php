<?php
	class login_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function check_user($email = '', $password = '')
    {
    	$email = $this->input->post('email');
    	$password = md5($this->input->post('password'));

    	$this->db->select();
    	$this->db->from('employees');
    	$this->db->where(array('email' => $email, 'password' => $password));

    	$query = $this->db->get();

    	if ($query->num_rows() > 0)
    	{
    		$employee = $query->row_array();

    		$_SESSION['logged_in'] = TRUE;
    		$_SESSION['employeeId'] = $employee['id'];
    		$_SESSION['firstname'] = $employee['firstname'];
    		$_SESSION['role_id'] = $employee['role_id'];

    		//var_dump($_SESSION);
    		//die();
    	}
    	else
    	{
    		die('failure!');

    		$_SESSION['employeeId'] = null;
    		$_SESSION['firstname'] = null;
    		$_SESSION['role_id'] = null;
    	}
    }

	}
