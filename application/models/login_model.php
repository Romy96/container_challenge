<?php
	class Login_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function check_user()
    {
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');

    	$this->db->select();
    	$this->db->from('employees');
    	$this->db->where(array('email' => $email, 'password' => $password));

    	$query1 = $this->db->get();

    	if ($query1->num_rows() == 1)
    	{
    		$row = $query1->row();

    		if(!empty($row)) 
    		{
    			$_SESSION['employeeId'] = $row['id'];
    			$_SESSION['logged_in'] = true;
    			$_SESSION['firstname'] = $row['firstname'];
    		}

    		/*$this->db->select('role_id');
    		$this->db->from('employee_role');
    		$this->db->where(array('employee_id' => $row['id']));

    		$query2 = $this->db->get();
    		$roles = $query2->result_array();

	    	if(isset($roles))
	    	{
	    		foreach($roles as $role)
	    		{
	    			$role_id = $role['role_id'];

	    			$this->db->select('role');
	    			$this->db->from('roles');
	    			$this->db->where(array('id' => $role_id));

	    			$query3 = $this->db->get();
	    			$rolename = $query3->result_array();

	    			$_SESSION['role'] = $rolename[0]['role'];
	    		}
	    	}*/
    	}
    	else
    	{
    		$_SESSION['employeeId'] = null;
    		$_SESSION['firstname'] = null;
    		$_SESSION['role'] = null;
    	}
    }

	}
