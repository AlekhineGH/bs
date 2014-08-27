<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Day1 extends MY_Controller {

    
        function __construct() {
            parent::__construct();
            
            $this->load->library('login_library');
            
            if(!$this->login_library->LoggedIn())
                redirect('login', 'refresh');
          
            
        }
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->view('day1/index');
	}
        
        public function grid_system()
        {
            $this->load->view('day1/grid_system');
        }
        
        public function fixed_layout()
        {
            $this->load->view('day1/fixed_layout');
        }
        
        public function fluid_layout()
        {
            $this->load->view('day1/fluid_layout');
        }       
        
        public function responsive_layout()
        {
            $this->load->view('day1/responsive_layout');
        }       
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */