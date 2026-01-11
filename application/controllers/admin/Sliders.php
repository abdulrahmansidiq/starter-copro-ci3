<?php

class Sliders extends MY_Controller
{

    public function index()
    {
        $data['sliders'] = $this->db->get('sliders')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/sliders/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function store()
    {
        $img = null;

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/sliders/';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $img = $this->upload->data('file_name');
            }
        }

        $this->db->insert('sliders', [
            'title' => $this->input->post('title'),
            'image' => $img
        ]);
        redirect('admin/sliders');
    }

    public function delete($id)
    {
        $this->db->delete('sliders', ['id' => $id]);
        redirect('admin/sliders');
    }
}
