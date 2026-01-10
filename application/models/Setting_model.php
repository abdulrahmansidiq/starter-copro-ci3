<?php

class Setting_model extends CI_Model
{

    public function get()
    {
        return $this->db->get_where('settings', ['id' => 1])->row();
    }
}
