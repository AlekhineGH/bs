<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Day3 extends MY_Controller {

        function __construct() {
            
            parent::__construct();

            }

    public function index()
    {
        $this->load->view('day3/buttons');
    }    
        
    public function buttons()
    {
        $this->load->view('day3/buttons');
    }    
    
    public function dropdowns()
    {
        $this->load->view('day3/dropdowns');
    }    

    public function js1()
    {
        $this->load->view('day3/js1');
    }    
    
    public function js2()
    {
        $this->load->view('day3/js2');
    }       
    
}

?>
