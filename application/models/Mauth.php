<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mauth extends CI_Model
{
    public function studentsLogin($sid, $password)
    {
        $this->db->where('sid', $sid);
        $this->db->where('password', $password);
        $query = $this->db->get('students');
        return $query->num_rows();
    }
    public function adminLogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        return $query->num_rows();
    }
    public function techLogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('tech');
        return $query->num_rows();
    }
}
