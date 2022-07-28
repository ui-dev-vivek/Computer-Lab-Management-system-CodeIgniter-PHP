<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mstudents extends CI_Model
{
	public function Registration($data)
	{

		$insert = $this->db->insert('students', $data);
		if ($insert) {
			return $this->db->insert_id();
		}
	}
	public function getAll($sid)
	{
		$this->db->where('sid', $sid);
		$query = $this->db->get('students');
		return $query->result();
	}
	public function getNotice()
	{
		$query = $this->db->get('notice');
		return $query->result();
	}
	public function getComplaint($sid)
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('sid', $sid);
		$query = $this->db->get('complaint');
		return $query->result();
	}
	public function getAttendance($sid)
	{
		$this->db->where('sid', $sid);
		$this->db->where('datex', date('Y-m-d'));
		$query = $this->db->get('attendance');
		return $query->result();
	}

	public function delComplaint($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('complaint');
	}
}
