<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mattendance extends CI_Model
{
    public function submitAttendance($data, $password)
    {
        $this->db->where('sid', $data['sid']);
        $this->db->where('password', $password);
        $query = $this->db->get('students');
        if ($query->num_rows() == 1) {
            $this->db->where('datex', date("Y-m-d"));
            $this->db->where('inTime', $data['inTime']);
            $queryx = $this->db->get('attendance');
            if ($queryx->num_rows() == 0) {
                $insert = $this->db->insert('attendance', $data);
                if ($insert) {
                    return $this->db->insert_id();
                }
            } else {
                die('Attendance is Alredy Marked!');
            }
        } else {
            die('Incorect Students Id or Password.');
        }
    }

    public function getAllAttendance()
    {
        $this->db->where('datex', date("Y-m-d"));
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('attendance');
        return $query->result();
    }
}
