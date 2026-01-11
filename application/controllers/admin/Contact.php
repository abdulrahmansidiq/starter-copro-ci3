<?php

class Contact extends MY_Controller
{

    public function index()
    {
        $data['c'] = $this->db->get_where('contact_info', ['id' => 1])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/contact/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update()
    {
        $data = [
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'maps' => $this->input->post('maps'),
            'whatsapp' => $this->input->post('whatsapp'),
            'instagram' => $this->input->post('instagram'),
        ];
        $this->db->update('contact_info', $data, ['id' => 1]);
        redirect('admin/contact');
    }
}
