<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{
    public function getAllStudents()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('students');
        return $query->result();
    }
    public function getAllTechnician()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tech');
        return $query->result();
    }
    public function addTechnician($data)
    {
        $this->db->insert('tech', $data);
    }
}
