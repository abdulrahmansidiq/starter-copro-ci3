<?php

class Install extends CI_Controller
{

    public function index()
    {
        if (file_exists(APPPATH . 'installed.lock')) {
            redirect('home');
        }
        $this->load->view('install/index');
    }

    public function process()
    {

        $host = $this->input->post('db_host');
        $user = $this->input->post('db_user');
        $pass = $this->input->post('db_pass');
        $name = $this->input->post('db_name');

        // generate database.php
        $db = file_get_contents(APPPATH . 'config/database.php');
        $db = str_replace('DB_HOST', $host, $db);
        $db = str_replace('DB_USER', $user, $db);
        $db = str_replace('DB_PASS', $pass, $db);
        $db = str_replace('DB_NAME', $name, $db);
        file_put_contents(APPPATH . 'config/database.php', $db);

        // import sql
        $sql = file_get_contents('./installer/database.sql');
        $mysqli = new mysqli($host, $user, $pass, $name);
        $mysqli->multi_query($sql);

        // create admin
        $mysqli->query("INSERT INTO users(name,email,password,role)
  VALUES(
   '" . $this->input->post('name') . "',
   '" . $this->input->post('email') . "',
   '" . password_hash($this->input->post('password'), PASSWORD_DEFAULT) . "',
   'admin')");

        file_put_contents(APPPATH . 'installed.lock', 'installed');

        redirect('home');
    }
}
