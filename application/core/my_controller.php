<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// if($this->session->userdata('email')==false)
		// {
		// 	redirect('admin/login/login');
		// }	

	}

	public function privacy_policy()
	{
		$data['display'] = $this->load->view('admin/privacy/privacy_policy','',true);
		$this->load->view('admin/index',$data);
	}

	public function terms_conditions()
	{
		$data['display'] = $this->load->view('admin/privacy/terms_condition','',true);
		$this->load->view('admin/index',$data);
	}
}