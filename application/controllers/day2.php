<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Day2 extends MY_Controller {
        
    function __construct() {
        
            parent::__construct();
   
        }
    
    public function index()
    {
        $this->load->view('day2/typography');
    }    
        
    public function typography()
    {
        $this->load->view('day2/typography');
    }
    
    public function tables()
    {
        $this->load->view('day2/tables');
    }
    
    public function lists()
    {
        $this->load->view('day2/lists');
    }
    
    public function forms()
    {
        $this->load->view('day2/forms');
    }    
    
    public function images()
    {
        $this->load->view('day2/images');
    }    
    
    public function icons()
    {
        $this->load->view('day2/icons');
    }
    
    public function navs()
    {
        $this->load->view('day2/navs');
    }    
 
    public function navbar()
    {
        $this->load->view('day2/navbar');
    }    
    
    public function navbar_r()
    {
        $this->load->view('day2/navbar_r');
    }    
    
    public function panels()
    {
        $this->load->view('day2/panels');
    }

    public function breadcrumbs()
    {
        $this->load->view('day2/breadcrumbs');
    }
    
    public function pagination()
    {
        $this->load->view('day2/pagination');
    }

    public function labels_badges()
    {
        $this->load->view('day2/labels_badges');
    }

    public function progress()
    {
        $this->load->view('day2/progress');
    }
    
    public function components()
    {
        $this->load->view('day2/components');
    }

    
}

?>
