<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Selamat Datang di Kaktus KMI";

        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}

?>