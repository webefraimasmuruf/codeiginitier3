<?php
class About extends CI_Controller
{


    public function index()
    {

        $data['title'] = 'About Me';
        $this->load->view('template/header', $data);
        $this->load->view('about/index');
        $this->load->view('template/footer');
    }
}