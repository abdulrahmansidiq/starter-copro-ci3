<?php

class Settings extends Admin_Controller
{

    public function index()
    {
        $data['set'] = $this->db->get_where('settings', ['id' => 1])->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/settings/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update()
    {

        $logo = $this->input->post('old_logo');
        $fav  = $this->input->post('old_favicon');

        $config['upload_path'] = './uploads/settings/';
        $config['allowed_types'] = 'png|jpg|ico';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
            $logo = $this->upload->data('file_name');
        }

        if ($this->upload->do_upload('favicon')) {
            $fav = $this->upload->data('file_name');
        }

        $this->db->update('settings', [
            'site_name' => $this->input->post('site_name'),
            'footer_text' => $this->input->post('footer_text'),
            'logo' => $logo,
            'favicon' => $fav
        ], ['id' => 1]);

        redirect('admin/settings');
    }
}
