<?php

class Pages extends Admin_Controller
{

    // tampil list halaman
    public function index()
    {
        $data['pages'] = $this->db->get('pages')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pages/index', $data);
        $this->load->view('admin/layout/footer');
    }

    // form edit
    public function edit($id)
    {
        $data['p'] = $this->db->get_where('pages', ['id' => $id])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pages/edit', $data);
        $this->load->view('admin/layout/footer');
    }

    // simpan update
    public function update($id)
    {
        $this->db->update('pages', [
            'title'   => $this->input->post('title'),
            'content' => $this->input->post('content')
        ], ['id' => $id]);

        redirect('admin/pages');
    }
}
