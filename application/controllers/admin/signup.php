<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends My_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model', 'admin');
	}

	public function index()
	{
		$this->register();
	}

	/**
	 * [verify_email If Email id already exist or not which is cheked with db Using Jquery Validations]
	 * @return [boolean] [true/false]
	 */
	public function verify_email()
	{
		if ($this->input->post())
		{
			$admin_data = $this->admin->get_all();

			foreach ($admin_data as $admin)
			{
				$emails[] = $admin['email'];
			}

			$email = _post('email');

			if (in_array($email, $emails))
			{
				echo 'false';
			}
			else
			{
				echo 'true';
			}
		}
	}

	/**
	 * [verify_username If Username is already exist or not which is cheked with db Using Jquery Validations]
	 * @return [type] [description]
	 */
	public function verify_username()
	{
		if ($this->input->post())
		{
			$admin_data = $this->admin->get_all();

			foreach ($admin_data as $admin)
			{
				$usernames[] = $admin['username'];
			}

			$username = _post('username');

			if (in_array($username, $usernames))
			{
				echo 'false';
			}
			else
			{
				echo 'true';
			}
		}
	}

	/**
	 * [register Function is for registering new user and insert data to admin table]
	 * @return [boolean] [returns true/false]
	 */
	public function register()
	{
		if ($this->input->post())
		{
			$firstname = _post('firstname');
			$lastname  = _post('lastname');
			$username  = _post('username');
			$email     = _post('email');
			$password  = md5(_post('password'));

			$admin_data = array(

				'firstname' => $firstname,
				'lastname'  => $lastname,
				'username'  => $username,
				'email'     => $email,
				'password'  => $password
			);

			$result = $this->admin->insert($admin_data);

			if ($result)
			{
				redirect('admin/signup/login');
			}
		}
		else
		{
			$data['display'] = $this->load->view('admin/signup/signup', '', true);
			$this->load->view('admin/common_signup', $data);
		}
	}

	/**
	 * [login Login user by checking username/email and Password]
	 * @return [type] [description]
	 */
	public function login()
	{
		if ($this->input->post())
		{
			$login_data      = _post('login');
			$password        = _post('password');
			$cookie_password = _post('password');
			$remember        = _post('remember');

			$result = $this->admin->check_login($login_data, $cookie_password);
			
			if ($remember == 1)
			{
				//echo 'set';
				$this->input->set_cookie('login', $login_data, 86500);
				$this->input->set_cookie('password', $cookie_password, 86500);
			}
			else
			{
				//echo "unset";
				delete_cookie('login');
				delete_cookie('password');
			}

			if ($result)
			{
				echo "true";
				set_session('login_data', $login_data);
			}
			else
			{
				echo "false";
			}
		}
		else
		{
			$data['display'] = $this->load->view('admin/signup/login', '', true);
			$this->load->view('admin/common_signup', $data);
		}
	}

	/**
	 * [check_email To check if Email is Registered or not In DB to Send Mail of Password with jquery Validation]
	 * @return [boolean] [true or false]
	 */
	public function is_registered()
	{
		if ($this->input->post())
		{
			$admin_data = $this->admin->get_all();

			foreach ($admin_data as $admin)
			{
				$emails[] = $admin['email'];
			}

			$email = _post('email');

			if (in_array($email, $emails))
			{
				echo 'true';
			}
			else
			{
				echo 'false';
			}
		}
	}

	/**
	 * [forgot_password Send Mail on provided Email Id to change Password]
	 * @return [type] [description]
	 */
	public function forgot_password()
	{
		if ($this->input->post())
		{
			$email = _post('email');
			set_session('email', $email);

			$from    = $this->config->item('smtp_user');
			$to      = $email;
			$subject = strstr(ucwords($email), '@', true).", Password Reset For Reddy Tour Account .";

			$data          = array();
			$data['email'] = $email;

			$message = $this->load->view('admin/signup/email_format_fp', $data, true);

			$this->email->set_newline("\r\n");
			$this->email->from($from);
			$this->email->to($to);
			$this->email->subject($subject);

			$this->email->message($message);
			$this->email->set_mailtype("html");

			if ($this->email->send())
			{
				set_session('email', $email);
				$data['display'] = $this->load->view('admin/signup/fp_success', '', true);
				$this->load->view('admin/common_signup', $data);
			}
			else
			{
				show_error($this->email->print_debugger());
			}
		}
		else
		{
			$data['display'] = $this->load->view('admin/signup/forgot_password', '', true);
			$this->load->view('admin/common_signup', $data);
		}
	}

	public function recover_password()
	{	
	
		if ($this->input->post())
		{
			$password = _post('password');
			$email    = fetch_session('email');

			$result = $this->admin->change_password($password, $email);

			if($result)
			{
				 $message = 
							[
								'message_type' => 'update',
								'title' => 'Success:',
								'text' => 'Password is Successfully Changed, Login with New Password.',
								'icon' => 'icon-checkmark3', // success
								'type' => 'success'
							];
							unset_session('email');
							$this->session->set_flashdata('message',$message);
							redirect('admin/signup/login'); 
			}
			else
			{
				$message = 
							[
								'message_type' => 'update',
								'title' => 'Error:',
								'text' => 'Sorry, Something Went Wrong..!!',
								'icon' => 'icon-checkmark3', // success
								'type' => 'danger'
							];
							$this->session->set_flashdata('message',$message);
							redirect('admin/signup/login');
			}
		}
		else
		{
			$email    = fetch_session('email');
			$data['display'] = $this->load->view('admin/signup/recover_password', '', true);
			$this->load->view('admin/common_signup', $data);
		}
	}

	public function logout()
	{
		destroy_session('login_data');
		redirect('admin/signup/login');
	}
}
