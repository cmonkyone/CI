<?php

class Home extends CI_Controller 
{

    public function index()
    {
        $this->load->view('inc/header_view');
        $this->load->view('home/home_view');
        $this->load->view('inc/footer_view');
        
        echo "Home Page";                
    }
    
}
