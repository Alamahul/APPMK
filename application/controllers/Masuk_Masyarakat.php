<?php

class Masuk_Masyarakat extends CI_Controller 
{

    public function index()
    {
    $data['judul'] = 'Masuk Masyarakat';
    $this->load->view('templates/masuk_dan_registrasi/header', $data);
    $this->load->view('masyarakat/masuk/index');
    $this->load->view('templates/masuk_dan_registrasi/footer');
    }

}