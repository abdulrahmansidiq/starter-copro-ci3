<?php

class Admin_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $user = $this->session->userdata('admin');

        if (!$user) redirect('admin/auth');

        if ($this->router->fetch_class() == 'users' && $user->role != 'superadmin') {
            show_error('Forbidden');
        }
    }
}
