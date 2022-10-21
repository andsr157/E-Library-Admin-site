<?php
class Siswa extends CI_Controller{
    public function index()
    {
        $this->load->view('view-form-biodata');
    }
    public function cetak(){
        $data = 
            [
             'nama' => $this->input->post('nama'),
             'nis' => $this->input->post('nis'),
             'kelas' => $this->input->post('sks'),
             'tgl_lahir' => $this->input->post('tgl_lahir'),
             'lahir' => $this->input->post('lahir'),
             'alamat' => $this->input->post('alamat'),
             'kelamin' => $this->input->post('kelamin'),
             'agama' => $this->input->post('sks')
             ];
            $this->load->view('view-data-siswa', $data);
    }
}