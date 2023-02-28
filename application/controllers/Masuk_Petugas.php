<?php

class Masuk_Petugas extends CI_Controller 
{
    public function index()
    {
        $data['judul'] = 'Masuk Petugas';
        $this->load->view('templates/masuk_dan_registrasi/header', $data);
        $this->load->view('petugas/masuk/index');
        $this->load->view('templates/masuk_dan_registrasi/footer');
    }
}
