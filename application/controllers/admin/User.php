<?php 
class User extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->login();
	}
	public function login()
	{
		// echo $this->M_User->hash('superadmin');
		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		$user_role = $this->session->userdata('role');
		if($user_role == 'superadmin') {
			$dashboard = 'admin/dashboard';	
		} else {
			$dashboard = 'admin/dashboard';
		}
		


		$this->M_User->loggedin() == FALSE || redirect($dashboard);
		$rules = $this->M_User->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			if($this->M_User->login() == TRUE)
			{
				redirect($dashboard);
			}
			else if($this->session->userdata('logged_in') == FALSE)
			{
				echo '<script>alert("Username/Password didn`t exists.");</script>';

			}
			else
			{
				$this->session->set_flashdata('error', 'Username and Password dont exists');
				redirect('admin/user/login' , 'refresh');
			}
		}
		// $this->data['subview'] = 'admin/login';
		$this->load->view('admin/login', $this->data);
	}

	public function profile() {
		$user_id = $this->session->userdata('id');

		if($this->input->post('submit')){
			if($this->input->post('password')) {
				$accounts = array(
					'password' => $this->M_User->hash($this->input->post('password')),
					'email' => $this->input->post('email'),
				);
				$this->db->where('id', $user_id);
				$this->db->update('user_accounts', $accounts);
				$details = array(
						'name' => $this->input->post('name'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact')
					);
				$this->db->where('user_id', $user_id);
				if($this->db->update('user_details', $details)) {
					$this->session->set_flashdata('message', 'Successfully Upated.');
					redirect('admin/user/profile');
				}
			} else {
				$accounts = array(
					'email' => $this->input->post('email'),
				);
				$this->db->where('id', $user_id);
				$this->db->update('user_accounts', $accounts);
				$details = array(
						'name' => $this->input->post('name'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact')
					);
				$this->db->where('user_id', $user_id);
				if($this->db->update('user_details', $details)) {
					$this->session->set_flashdata('message', 'Successfully Upated.');
					redirect('admin/user/profile');
				}
			}
		}

		$this->data['user_accounts'] = $this->M_User->get_accounts($user_id);
		$this->data['user_details'] = $this->M_User->get_by_id($user_id);
		$this->data['subview'] = 'admin/profile';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function logout()
	{
		$this->M_User->logout();
		redirect('admin/user/login');
	}

	public function forgot_password() {
		if ($this->input->post('submit')) {
			$email = $this->input->post('email');
			$this->db->where('email', $email);
			$chk = $this->db->get('user_accounts')->row();
			if($chk){
				$new_pass = $this->randomPassword();
				//Send on email
				$this->load->library('email');
				//SMTP & mail configuration Localhost
				$config = array(
				    'protocol'  => 'smtp',
				    'smtp_host' => 'ssl://smtp.googlemail.com',
				    'smtp_port' => 465,
				    'smtp_user' => 'sscai.dev@gmail.com',
				    'smtp_pass' => 'sscai123',
				    'mailtype'  => 'html',
				    'charset'   => 'utf-8'
				);
				$this->email->initialize($config);
				$this->email->set_mailtype("html");
				$this->email->set_newline("\r\n");

				//SMTP & mail configuration Live
				// $config = Array(
    //                 'protocol' => 'smtp',
    //                 'smtp_host' => 'ssl://smtp.googlemail.com',
    //                 'smtp_port' => 465,
    //                 'smtp_user' => 'sscai.dev@gmail.com',
    //                 'smtp_pass' => 'sscai123',
    //                 'charset'   => 'iso-8859-1'
    //             );
    //             $this->load->library('email', $config);
    //             $this->email->set_newline("\r\n");
    //             $this->email->set_mailtype("html");


				//Email content
				$htmlContent = '<h1>Your new password is : </h1>';
				$htmlContent .= '<p>'. $new_pass . '</p>';

				$this->email->to($email);
				$this->email->from('sscai.dev@gmail.com','SSCAI - Reset Password');
				$this->email->subject('Forgot password');
				$this->email->message($htmlContent);

				//Send email
				if($this->email->send()){
					$message = "Your new password is sent on your email.";
					//Update table
					$hash_new_pass = $this->M_User->hash($new_pass);
					$data = array(
							'password' => $hash_new_pass
						);
					$this->db->where('id', $chk->id);
					$this->db->update('user_accounts', $data);
					echo "<script>alert('New Password is sent to your email.');</script>";
				}else{
					echo "<script>alert('There is an error occured. Please try again.');</script>";
				}
			}else{
				echo "<script>alert('Email dont exists.');</script>";
			}
		}
		// $this->data['subview'] = 'admin/reset_password';
		$this->load->view('admin/reset_password', $this->data);
	}

	public function change_pass() {
		$password = $this->input->post('password');
		$hash_password = $this->M_User->hash($password);
		$data = array(
				'password' => $hash_password,
				'cp' => 'yes'
			);
		$this->db->where('id', $this->session->userdata('id'));
		if($this->db->update('user_accounts', $data)) {
			redirect('admin/dashboard');
		}
	}

	public function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}

	public function history() {
		$this->db->where('user_id', $this->session->userdata('id'));
		$this->db->order_by('id', 'desc');
		$res = $this->db->get('user_logs')->result();
		$this->data['history'] = $res;
		$this->data['subview'] = 'history';
		$this->load->view('main_layout', $this->data);
	}

}

?>