<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmain extends CI_Model
{
    public function home()
    {
    }
    public function Registration($data)
    {

        $insert = $this->db->insert('students', $data);
        if ($insert) {
            return $this->db->insert_id();
        }
    }
}
