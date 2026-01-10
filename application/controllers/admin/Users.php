<?php

class Users extends Admin_Controller
{

    public function index()
    {
        $data['users'] = $this->db->get('users')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/users/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function store()
    {
        $this->db->insert('users', [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => $this->input->post('role')
        ]);
        redirect('admin/users');
    }

    public function delete($id)
    {
        $this->db->delete('users', ['id' => $id]);
        redirect('admin/users');
    }
}
