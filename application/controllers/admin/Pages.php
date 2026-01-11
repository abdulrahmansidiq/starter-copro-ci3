<?php
class Pages extends MY_Controller
{

    public function index()
    {
        $data['pages'] = $this->db->get('pages')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pages/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        $data['p'] = $this->db->get_where('pages', ['id' => $id])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/pages/edit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update($id)
    {

        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_keywords' => $this->input->post('meta_keywords')
        ];

        $this->db->update('pages', $data, ['id' => $id]);

        redirect('admin/pages');
    }
}
