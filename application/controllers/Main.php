<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmain');
	}

	public function index()
	{

		$this->load->view('mainInc/top');
		$this->load->view('mainInc/Nav');
		$this->load->view('main/home');
		$this->load->view('mainInc/footer.php');
	}
	public function registratioForm()
	{
		$this->load->view('mainInc/top');
		$this->load->view('mainInc/nav');
		$this->load->view('main/studentsReg');
		$this->load->view('mainInc/footer');
	}

	public function Registration()
	{
		$data['name'] = $this->input->post('name') ? $this->input->post('name')  : die('Fill Name:');
		$data['sid'] = $this->input->post('cid') ? $this->input->post('cid') : die('Fill Collage Id');
		$data['branch'] = $this->input->post('branch') ? $this->input->post('branch') : die('FIll Branch:');
		$data['year'] = $this->input->post('year') ? $this->input->post('year') : die('Fill Year:');
		$data['email'] = $this->input->post('email') ? $this->input->post('email') : die('Fill Email');
		$data['password'] = $this->input->post('pass') ? md5($this->input->post('pass')) : die('Fill Password:');

		if ($this->Mmain->Registration($data)) {
			die('1');
		} else {
			echo "Error Found! Try Agane.";
		}
	}
	public function About()
	{
		$this->load->view('mainInc/top');
		$this->load->view('mainInc/Nav');
		$this->load->view('main/about');
		$this->load->view('mainInc/footer');
	}
}
