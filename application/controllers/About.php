<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Tentang Website';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}
