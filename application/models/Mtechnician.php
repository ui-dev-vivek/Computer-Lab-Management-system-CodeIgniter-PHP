<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mtechnician extends CI_Model
{
    public function getAllStudents()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('students');
        return $query->result();
    }
    public function getAllNotice()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('notice');
        return $query->result();
    }
    public function delNotice($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('notice');
    }
    public function addNotice($data)
    {
        $this->db->insert('notice', $data);
    }
}
