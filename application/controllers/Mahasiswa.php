<?php

class Mahasiswa extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation', 'session');
    }

    public function index()
    {

        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
        if ($this->input->post('cari')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cari_data();
        }

        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }



    public function tambah_mhs()
    {


        $data['title'] = 'Tambah Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('jurusan');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah_mhs', $data);
            $this->load->view('template/footer');
        } else {


            $this->Mahasiswa_model->tambah_mhs();
            $this->session->set_flashdata('flash', 'ditambahkan..!');
            redirect("mahasiswa/index");
        }
    }
    public function delete($id)
    {
        $this->Mahasiswa_model->delete($id);
        $this->session->set_flashdata('flash', 'dihapus..!');
        redirect('mahasiswa/index');
    }
    public function detail($id)
    {

        $data['title'] = 'detail mahasiswa';
        $data['detail'] = $this->Mahasiswa_model->detail($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }
    public function update($id)
    {

        $data['title'] = 'Tambah Mahasiswa';
        $data['mhs'] = $this->Mahasiswa_model->detail($id);
        $data['jurusan'] = ['teknik_informatika', 'tenik_komputer', 'teknik_listrik', 'teknik_mesin'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('jurusan');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/update', $data);
            $this->load->view('template/footer');
        } else {


            $this->Mahasiswa_model->update();
            $this->session->set_flashdata('flash', 'diupdate..!');
            redirect("mahasiswa/index");
        }
    }
}