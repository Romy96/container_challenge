<?php 

class logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index()
    {
        session_destroy();
        redirect('login', 'Refresh');
    }
}

?>