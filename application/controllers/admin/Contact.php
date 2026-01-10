<?php

class Contact extends Admin_Controller
{

    public function index()
    {
        $data['c'] = $this->db->get('contact_info')->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/contact/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update()
    {
        $this->db->update('contact_info', [
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email')
        ], ['id' => 1]);
        redirect('admin/contact');
    }
}
