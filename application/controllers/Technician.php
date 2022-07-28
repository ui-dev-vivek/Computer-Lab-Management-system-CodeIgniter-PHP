<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Technician extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mtechnician');
		$this->load->view('tech/top.php');
		$isTechLogin = $this->session->userdata('isTechLogin');
		if (!$isTechLogin) {
			redirect(base_url() . 'Auth/technicianLogin');
		}
	}

	public function index()
	{
		$this->load->view('tech/dashboard.php');
		$this->load->view('tech/footer.php');
	}
	public function Attendance()
	{
		$this->load->model('Mattendance');
		$result['data'] = $this->Mattendance->getAllAttendance();
		$this->load->view('tech/attendance.php', $result);
		$this->load->view('tech/footer.php');
	}
	public function Complaint()
	{
		$this->load->model('Mcomplaint');
		$result['data'] = $this->Mcomplaint->getAllComplaint();
		$this->load->view('tech/complaint.php', $result);
		$this->load->view('tech/footer.php');
	}
	public function Students()
	{

		$result['result'] = $this->Mtechnician->getAllStudents();
		$this->load->view('tech/students.php', $result);
		$this->load->view('tech/footer.php');
	}
	public function Notice()
	{

		$result['result'] = $this->Mtechnician->getAllNotice();
		$this->load->view('tech/notice.php', $result);
		$this->load->view('tech/footer.php');
	}
	public function delNotice()
	{
		$did = $this->input->post('id');
		$this->Mtechnician->delNotice($did);
	}

	public function addNotice()
	{
		$data['notice'] = $this->input->post('notice');
		$data['status'] = 1;
		$this->Mtechnician->addNotice($data);
		redirect('Technician/Notice');
	}
}
