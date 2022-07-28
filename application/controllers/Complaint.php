<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Complaint extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcomplaint');
    }

    public function submitComplaint()
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
        $data['cType'] = $this->input->post('cType') ? $this->input->post('cType') : die('Fill Complaint Type:');
        $data['descx'] = $this->input->post('descx') ? $this->input->post('descx') : die('Fill In Description');
        $data['status'] = 1;
        if ($this->Mcomplaint->submitComplaint($data, $password)) {
            die('1');
        } else {
            echo "Error Found! Try Agane.";
        }
    }

    public function delComplaint()
    {
        $did = $this->input->post('id');
        $this->Mcomplaint->delComplaint($did);
    }
    public function complaintSolved()
    {
        $sid = $this->input->post('id');
        $this->Mcomplaint->complaintSolved($sid);
    }
    public function getComplaint(){
        $data['sid']=$this->input->post('sid');
        $data['lab']=$this->input->post('lab');
        $data['status']=$this->input->post('status');
        $data['byDate']=$this->input->post('byDate');
        $result['result']=$this->Mcomplaint->getComplaint($data);
        $this->load->view('tech/getComplaint.php', $result);
    }
}

