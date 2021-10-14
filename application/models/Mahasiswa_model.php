<?php

class Mahasiswa_model extends CI_Model
{


    public function get_mahasiswa()
    {
        $query = $this->db->get('tb_kuliah');
        return $query->result_array();
    }


    public function tambah_mhs()
    {



        $data = array(


            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),

        );

        $this->db->insert('tb_kuliah', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kuliah');
    }
    public function detail($id)
    {
        return $this->db->get_where('tb_kuliah', ['id' => $id])->row_array();
    }


    public function update()
    {



        $data = array(


            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),

        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_kuliah', $data);
    }
    public function cari_data()
    {

        $cari = $this->input->post('cari', true);
        $this->db->like('nama', $cari);
        $this->db->or_like('nim', $cari);
        $this->db->or_like('jurusan', $cari);
        $this->db->or_like('email', $cari);
        return $this->db->get('tb_kuliah')->result_array();
    }
}