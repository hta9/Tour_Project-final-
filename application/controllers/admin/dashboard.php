<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller
{
	function __construct()
	{
		parent::__construct();
		
	}

	/**
	 * [index Dashboard Page]
	 * @return [type] [description]
	 */
	public function index()
	{	
		$data['display'] = $this->load->view('admin/dashboard/dashboard','',true);
		$this->load->view('admin/index',$data);
	}

	public function notifications()
	{	
		$data['display'] = $this->load->view('admin/dashboard/notifications','',true);
		$this->load->view('admin/index',$data);
	}

	public function my_tours()
	{
		$data['display'] = $this->load->view('admin/dashboard/my_tours','',true);
		$this->load->view('admin/index',$data);
	}
	public function finances()
	{
		$data['display'] = $this->load->view('admin/dashboard/finances','',true);
		$this->load->view('admin/index',$data);
	}

	public function marketing()
	{
		$data['display'] = $this->load->view('admin/dashboard/marketing','',true);
		$this->load->view('admin/index',$data);
	}

	public function settings()
	{
		$data['display'] = $this->load->view('admin/dashboard/settings','',true);
		$this->load->view('admin/index',$data);
	}

	public function help()
	{
		$data['display'] = $this->load->view('admin/dashboard/help','',true);
		$this->load->view('admin/index',$data);
	}


	public function get_in_touch()
	{
		$data['display'] = $this->load->view('admin/dashboard/get_in_touch','',true);
		$this->load->view('admin/index',$data);
	}

}