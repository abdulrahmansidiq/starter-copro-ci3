<?php

class Services extends MY_Controller
{

    public function index()
    {
        $data['services'] = $this->db->get('services')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/services/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function create()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/services/create');
        $this->load->view('admin/layout/footer');
    }

    // public function store()
    // {
    //     $this->db->insert('services', [
    //         'title' => $this->input->post('title'),
    //         'description' => $this->input->post('description')
    //     ]);
    //     redirect('admin/services');
    // }

    public function store()
    {

        $img = null;

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path']   = './uploads/services/';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $img = $this->upload->data('file_name');
            }
        }
        $this->load->helper('security');
        $desc = $this->security->xss_clean($this->input->post('description'));

        $this->db->insert('services', [
            'title' => $this->input->post('title'),
            'description' => $desc,
            'image' => $img
        ]);

        redirect('admin/services');
    }


    public function edit($id)
    {
        $data['s'] = $this->db->get_where('services', ['id' => $id])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/services/edit', $data);
        $this->load->view('admin/layout/footer');
    }

    // public function update($id)
    // {
    //     $this->db->update('services', [
    //         'title' => $this->input->post('title'),
    //         'description' => $this->input->post('description')
    //     ], ['id' => $id]);
    //     redirect('admin/services');
    // }


    public function update($id)
    {

        $img = $this->input->post('old_image');

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/services/';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $img = $this->upload->data('file_name');
            }
        }

        $this->db->update('services', [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => $img
        ], ['id' => $id]);

        redirect('admin/services');
    }


    public function delete($id)
    {
        $this->db->delete('services', ['id' => $id]);
        redirect('admin/services');
    }
}
