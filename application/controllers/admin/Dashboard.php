<?php

class Dashboard extends MY_Controller
{

    public function index()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
}
