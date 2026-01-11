<?php

class Gallery extends MY_Controller
{

    public function index()
    {
        $data['gallery'] = $this->db->get('galleries')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/gallery/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function store()
    {
        $img = null;

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/gallery/';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $img = $this->upload->data('file_name');
            }
        }

        $this->db->insert('galleries', [
            'caption' => $this->input->post('caption'),
            'image' => $img
        ]);
        redirect('admin/gallery');
    }

    public function delete($id)
    {
        $this->db->delete('galleries', ['id' => $id]);
        redirect('admin/gallery');
    }
}
