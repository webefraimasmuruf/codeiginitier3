<?php

class Peoples extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peoples_model');
        $this->load->library('pagination');
    }

    public function index()
    {
        if ($this->input->post('cari')) {

            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        // pagination
        $config['base_url'] = 'http://localhost/ci3/peoples/index';
        $config['total_rows'] = $this->Peoples_model->count_rows();
        $config['per_halaman'] = 12;
        $config['num_links'] = 5;



        $config['full_tag_open'] = '<nav">
        <ul class="pagination pagination-md justify-content-center"';


        $config['full_tag_close'] = '</ul>
        </nav">
        <ul class="pagination"';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['next_link'] = '&laquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');





        $this->pagination->initialize($config);
        // end pagenation

        $data['jumlah'] = $this->Peoples_model->jumlah_row();
        $data['title'] = 'List Of Peoples';
        $data['start'] = $this->uri->segment(3);

        $data['peoples'] = $this->Peoples_model->get_peoples($config['per_halaman'], $data['start'], $data['keyword']);


        $this->load->view('template/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('template/footer');
    }
}