<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $data['sliders'] = $this->db->get('sliders')->result();
        $data['seo'] = $this->db->get_where('seo', ['page' => 'home'])->row();
        $this->load->view('layout/header', $data);
        $this->load->view('home/index');
        $this->load->view('layout/footer');
    }


    public function about()
    {
        $data['title'] = 'About';
        $data['page'] = $this->db->get_where('pages', ['slug' => 'about'])->row();
        $data['seo'] = $this->db->get_where('seo', ['page' => 'home'])->row();
        $this->load->view('layout/header', $data);
        $this->load->view('home/page', $data);
        $this->load->view('layout/footer');
    }



    public function services()
    {
        $data['title'] = 'Services';
        $data['services'] = $this->db->get('services')->result();
        $data['seo'] = $this->db->get_where('seo', ['page' => 'home'])->row();
        $this->load->view('layout/header', $data);
        $this->load->view('home/services', $data);
        $this->load->view('layout/footer');
    }

    public function gallery()
    {
        $data['title'] = 'Gallery';
        $data['gallery'] = $this->db->get('galleries')->result();
        $data['seo'] = $this->db->get_where('seo', ['page' => 'home'])->row();
        $this->load->view('layout/header', $data);
        $this->load->view('home/gallery', $data);
        $this->load->view('layout/footer');
    }


    public function contact()
    {
        $data['title'] = 'Contact';
        $data['seo'] = $this->db->get_where('seo', ['page' => 'home'])->row();
        $this->load->view('layout/header', $data);
        $this->load->view('home/contact');
        $this->load->view('layout/footer');
    }
}
