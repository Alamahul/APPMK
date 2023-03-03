<?php

class Registrasi_Masyarakat extends CI_Controller 
{
    private $model;
    public function __construct() {
        parent::__construct();
        $this->load->model('MasyarakatModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
    $data['judul'] = 'Registerasi Masyarakat';
    $this->load->view('templates/masuk_dan_registrasi/header', $data);
    $this->load->view('masyarakat/registrasi/index');
    $this->load->view('templates/masuk_dan_registrasi/footer');
    }
    public function registrasi()
    {
        if ($this->MasyarakatModel->tambahMasyarakat($_POST) > 0) {
            header('Location:'. base_url() . 'Home');
        }else{
            header('Location:'. base_url() . 'Registrasi_Masyarakat');
        }

    }
    
    

}