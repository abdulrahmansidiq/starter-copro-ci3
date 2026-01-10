<?php

class Admin_Controller extends CI_Controller
{
    public $setting;

    public function __construct()
    {
        parent::__construct();

        $user = $this->session->userdata('admin');

        if (!$user) redirect('admin/auth');

        if ($this->router->fetch_class() == 'users' && $user->role != 'superadmin') {
            show_error('Forbidden');
        }

        $this->load->model('Setting_model');

        $this->setting = $this->Setting_model->get();

        $this->load->vars(['setting' => $this->setting]);
    }
}
