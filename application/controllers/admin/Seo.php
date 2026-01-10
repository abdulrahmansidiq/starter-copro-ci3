<?php

class Seo extends Admin_Controller
{

    public function index()
    {
        $data['seo'] = $this->db->get('seo')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/seo/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $data['s'] = $this->db->get_where('seo', ['id' => $id])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/seo/edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update($id)
    {
        $this->db->update('seo', [
            'meta_title' => $this->input->post('meta_title'),
            'meta_desc' => $this->input->post('meta_desc'),
            'meta_keywords' => $this->input->post('meta_keywords')
        ], ['id' => $id]);
        redirect('admin/seo');
    }
}
