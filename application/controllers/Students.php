<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mstudents');

		$isLogin = $this->session->userdata('isLogin');
		if (!$isLogin) {
			redirect(base_url() . 'Auth/studentsLogin');
		}
	}

	public function index()
	{
		$sid = $this->session->userdata('sid');
		$result['getAll'] = $this->Mstudents->getAll($sid);
		$result['notice'] = $this->Mstudents->getNotice($sid);
		$this->load->view('students/top.php', $result);
		// $result['getComplaint'] = $this->Mstudents->getComplaint($sid);
		// $result['getAttendance'] = $this->Mstudents->getAttendance($sid);
		$this->load->view('students/dashboard.php');
		$this->load->view('students/footer.php');
	}
	public function getAttendance()
	{
		$sid = $this->session->userdata('sid');
		$result['getAttendance'] = $this->Mstudents->getAttendance($sid);
		$this->load->view('students/getAttendance.php', $result);
	}
	public function getComplaint()
	{
		$sid = $this->session->userdata('sid');
		$result['getComplaint'] = $this->Mstudents->getComplaint($sid);
		$this->load->view('students/getComplaint.php', $result);
	}
	public function delComplaint()
	{
		$did = $this->input->post('id');
		$this->Mstudents->delComplaint($did);
	}
}
