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
		$this->load->view('admin/privacy/privacy_policy');
	}

	public function terms_conditions()
	{
		$this->load->view('admin/privacy/terms_condition');
	}
}