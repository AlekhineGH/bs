<?php

class Login extends CI_Controller {

    
        function __construct() {
            parent::__construct();
            
            if ( $this->input->post( 'remember_me' ) ) // set sess_expire_on_close to 0 or FALSE when remember me is checked.
                $this->config->set_item('sess_expire_on_close', '0'); // do change session config
 
            $this->load->library('login_library');
            
            if($this->login_library->LoggedIn())
                redirect('day1', 'refresh');
        }
        
        function index()
        {
            $this->load->view('login/login');
        }
        
        function register()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $this->login_library->register($email,$password);
            
        }

        /**
         * logIn
         * 
         * Login a user and redirect him to index page.
         * 
         * @param string $user the user that will be logged in
         * 
         * returns @void
         */
        function logIn($user='default')
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $this->login_library->logIn($email,$password);
            
            //TODO todo1
            
            //TODO todo2
            
        }
}

?>