<?php

class Backup extends MY_Controller
{

    public function index()
    {
        $this->load->dbutil();
        $backup = $this->dbutil->backup();

        $this->load->helper('file');
        write_file('./backup/db_' . date('Ymd_His') . '.zip', $backup);

        $this->load->helper('download');
        force_download('backup_' . date('Ymd') . '.zip', $backup);
    }
}
