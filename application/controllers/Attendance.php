<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Attendance extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mattendance');
	}
	public function submitAttendance()
	{

		$sid = $this->session->userdata('sid');
		if ($sid) {
			$this->load->model('Mstudents');
			$getAll = $this->Mstudents->getAll($sid);
			$data['sid'] = $sid;
			$password = $getAll[0]->password;
		} else {
			$data['sid'] = $this->input->post('sid') ? $this->input->post('sid')  : die('Fill Students Id:');
			$password = $this->input->post('password') ? md5($this->input->post('password')) : die('Fill Password:');
		}
		$data['lab'] = $this->input->post('lab') ? $this->input->post('lab') : die('Fill Lab ');
		$data['system'] = $this->input->post('system') ? $this->input->post('system') : die('FIll System Number:');
		$data['outTime'] = $this->input->post('outTime') ? $this->input->post('outTime') : die('Fill outTime:');
		$data['inTime'] = $this->input->post('inTime') ? $this->input->post('inTime') : die('Fill In Time');
		if ($this->Mattendance->submitAttendance($data, $password)) {
			die('1');
		} else {
			echo "Error Found! Try Agane.";
		}
	}
}
