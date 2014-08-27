<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
        function __construct() {
            
            parent::__construct();
            
            $this->load->library('login_library');
            
            if(!$this->login_library->LoggedIn())
                redirect('login', 'refresh');
          
        }      
        
}