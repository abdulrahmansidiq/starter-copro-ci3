<?php

class Messages extends Admin_Controller
{

    public function index()
    {
        $data['m'] = $this->db->order_by('id', 'desc')->get('messages')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/messages/index', $data);
        $this->load->view('admin/layout/footer');
    }
}
