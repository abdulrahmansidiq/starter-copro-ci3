<?php

class Setting extends MY_Controller
{

    public function index()
    {
        $data['s'] = $this->setting;
        $this->load->view('admin/layout/header');
        $this->load->view('admin/setting/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update()
    {

        $data = [
            'company_name' => $this->input->post('company_name'),
            'tagline' => $this->input->post('tagline'),
            'footer' => $this->input->post('footer'),
        ];

        // upload logo
        if (!empty($_FILES['logo']['name'])) {
            $logo = $this->_upload('logo');
            $data['logo'] = $logo;
        }

        // upload favicon
        if (!empty($_FILES['favicon']['name'])) {
            $fav = $this->_upload('favicon');
            $data['favicon'] = $fav;
        }

        $this->db->update('settings', $data, ['id' => 1]);
        redirect('admin/setting');
    }

    private function _upload($field)
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|ico';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field)) {
            die($this->upload->display_errors());
        }

        return $this->upload->data('file_name');
    }
}
