<?php

class Logout extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->load->library('login_library');
            
            if(!$this->login_library->LoggedIn())
                redirect('login', 'refresh');

        }
        
        function index()
        {
            // logout the user and redirect to index
            $this->session->unset_userdata('is_logged_in');
            $this->session->sess_destroy();
            redirect('day1','refresh');
        }
}

?>