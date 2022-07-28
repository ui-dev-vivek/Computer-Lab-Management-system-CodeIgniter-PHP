<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->view('admin/top.php');
		$isAdminLogin = $this->session->userdata('isAdminLogin');
		if (!$isAdminLogin) {
			redirect(base_url() . 'Auth/adminLogin');
		}
	}

	public function index()
	{
		$this->load->view('admin/dashboard.php');
		$this->load->view('admin/footer.php');
	}

	public function Students()
	{
		$result['result'] = $this->Madmin->getAllStudents();
		$this->load->view('admin/students.php', $result);
		$this->load->view('admin/footer.php');
	}

	public function Technician()
	{
		$result['result'] = $this->Madmin->getAllTechnician();
		$this->load->view('admin/technician.php', $result);
		$this->load->view('admin/footer.php');
	}
	public function addTechnician()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['department'] = $this->input->post('department');
		$data['password'] = md5($this->input->post('password'));
		$data['status'] = 1;
		$this->Madmin->addTechnician($data);
		redirect('Admin/Technician');
	}
}
