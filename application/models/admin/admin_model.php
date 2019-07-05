<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends My_Model {

	protected $soft_delete = TRUE;
	protected $table = 'admin';

	/**
	 * [check_login If User is Valid or Not With Unique Username or Id]
	 * @param  [string] $login_data [Email Id or Username]
	 * @param  [string] $password   [user inserted password without md5-encryption]
	 * @return [boolean]          [true/false]
	 */
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

	/**
	 * [change_password Change the password of Sessioned User]
	 * @param  [string] $password   [User Inserted New Password]
	 * @param  [string] $email 		[Session stored Email when mail is sent to user ]
	 * @return [boolean]             [true/false]
	 */
	public function change_password($password,$email)
	{
		$enc_password = md5($password);
		
		$sql = $this->db->query("UPDATE admins 
								 SET password = '$enc_password' 
								 WHERE email = '$email' 
								 ");

		$rows = $this->db->affected_rows();
	
		if($rows==0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	
}
