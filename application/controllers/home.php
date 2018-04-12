<?php 
Class home extends CI_Controller
{
    public function index()
    {
        $this->data['view']='index';
        $this->load->view('frontend/layout', $this->data);
    }
}

