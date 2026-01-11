<?php

class Auth extends MY_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $pass  = md5($this->input->post('password'));

        $user = $this->db->get_where('users', [
            'email' => $email,
            'password' => $pass
        ])->row();

        if ($user) {
            $this->session->set_userdata('admin', $user);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('err', 'Login gagal');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('admin');
        redirect('admin/auth');
    }
}
