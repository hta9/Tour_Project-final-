<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends My_Model {

	protected $soft_delete = TRUE;
	protected $table = 'admin';

	public function check_login($login_data,$password)
	{	
		$enc_password = md5($password);
	
		$sql = $this->db->query("SELECT * 
								 FROM admins
								 WHERE (username = '$login_data' OR email = '$login_data') 
								 AND  password='$enc_password' ");

		if($sql->num_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
