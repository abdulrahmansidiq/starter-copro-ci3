<?php

class Dashboard extends Admin_Controller
{

    public function index()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
}
