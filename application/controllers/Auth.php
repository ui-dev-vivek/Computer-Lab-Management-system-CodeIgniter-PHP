<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mauth');
		$this->load->view('mainInc/top');
		$this->load->view('mainInc/nav');
	}

	public function adminLogin()
	{
		$this->load->view('main/adminLogin.php');
		$this->load->view('mainInc/footer.php');
	}
	public function adminloginAuth()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$isAuth = $this->Mauth->adminLogin($email, $password);
		if ($isAuth == 1) {
			$this->session->set_userdata('isAdminLogin', true);
			$this->session->set_userdata('email', $email);
			die('1');
		} else {
			die('0');
		}
	}

	public function technicianLogin()
	{
		$this->load->view('main/technicianLogin.php');
		$this->load->view('mainInc/footer.php');
	}
	public function techloginAuth()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$isAuth = $this->Mauth->techLogin($email, $password);
		if ($isAuth == 1) {
			$this->session->set_userdata('isTechLogin', true);
			$this->session->set_userdata('email', $email);
			die('1');
		} else {
			die('0');
		}
	}

	public function studentslogin()
	{
		$this->load->view('main/studentsLogin');
		$this->load->view('mainInc/footer');
	}
	public function studentsloginAuth()
	{
		$sid = $this->input->post('sid');
		$password = md5($this->input->post('password'));
		$isAuth = $this->Mauth->studentsLogin($sid, $password);
		if ($isAuth == 1) {
			$this->session->set_userdata('isLogin', true);
			$this->session->set_userdata('sid', $sid);
			die('1');
		} else {
			die('0');
		}
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
}
