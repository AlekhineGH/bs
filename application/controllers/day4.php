<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Day4 extends MY_Controller {

        function __construct() {
            
            parent::__construct();
        }
    
    public function accordion()
    {
        $this->load->view('day4/accordion');
    }
    
    public function affix()
    {
        $this->load->view('day4/affix');
    }
    
    public function alerts()
    {
        $this->load->view('day4/alerts');
    }    
    
    public function carousel()
    {
        $this->load->view('day4/carousel');
    }
    
    public function modals()
    {
        $this->load->view('day4/modals');
    }    
    
    public function popovers()
    {
        $this->load->view('day4/popovers');
    }    
    
    public function scrollspy()
    {
        $this->load->view('day4/scrollspy');
    }

    public function tabs()
    {
        $this->load->view('day4/tabs');
    }
    
    public function tooltips()
    {
        $this->load->view('day4/tooltips');
    }

    public function typeahead()
    {
        $this->load->view('day4/typeahead');
    }      
    
}

?>
