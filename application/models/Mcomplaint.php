<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcomplaint extends CI_Model
{
    public function submitComplaint($data, $password)
    {
        $this->db->where('sid', $data['sid']);
        $this->db->where('password', $password);
        $query = $this->db->get('students');
        if ($query->num_rows() == 1) {
            $this->db->where('lab', $data['lab']);
            $this->db->where('system', $data['system']);
            $this->db->where('cType', $data['cType']);
            $queryx = $this->db->get('complaint');
            if ($queryx->num_rows() == 0) {
                $insert = $this->db->insert('complaint', $data);
                if ($insert) {
                    return $this->db->insert_id();
                }
            } else {
                die('This Type Of Complaint is Alredy Submitted!');
            }
        } else {
            die('Incorect Students Id or Password.');
        }
    }


    public function getAllComplaint()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('complaint');
        return $query->result();
    }
    public function delComplaint($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('complaint');
    }
    public function complaintSolved($id)
    {

        $this->db->set('status', 2);
        $this->db->where('id', $id);
        $this->db->update('complaint');
    }
    public function getComplaint($data){
      if ($data['sid'] !='All') {
        $this->db->where('sid', $data['sid']);
      }
       if ($data['lab'] !='') {
        $this->db->where('lab', $data['lab']);
      }
      if ($data['status'] !='') {
        $this->db->where('status', $data['status']);
        $data['status'];
      }
       if ($data['byDate'] !='') {
        $this->db->where('dateTime', $data['byDate']);
        echo $data['status'];
      }
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('complaint');
      return $query->result();
    }
}
