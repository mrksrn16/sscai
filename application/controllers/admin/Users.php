<?php 
class Users extends Admin_Controller
{
	public $page = 'users';
	function __construct() {
		parent::__construct();
		if($this->session->userdata('role') == 'admin') {
			redirect('admin/activities');
		}
	}
	public function index() {
		$this->db->where('role!=', 'superadmin');
		$this->data['result'] = $this->db->get('user_accounts')->result();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function add() {
		if($this->input->post('submit')) {
			$email = $this->input->post('email');
			$this->db->where('email', $email);
			$res = $this->db->get('user_accounts')->row();
			if($res) {
				$this->session->set_flashdata('message', 'Email already taken.');
			} else {

				$password = $this->randomPassword();
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
				$htmlContent = '<h1>Your password is : </h1>';
				$htmlContent .= '<p>'. $password . '</p>';

				$this->email->to($email);
				$this->email->from('sscai.dev@gmail.com','SSCAI - Registration Password');
				$this->email->subject('Registration password');
				$this->email->message($htmlContent);

				//Send email
				if($this->email->send()){
					$accounts = array(
							'email' => $email,
							'password' => $this->M_User->hash($password),
							'role' => 'admin'
						);
					$this->db->insert('user_accounts', $accounts);
					$insert_id = $this->db->insert_id();
					$data = array(
							'user_id' => $insert_id,
							'name' => $this->input->post('name'),
							'address' => $this->input->post('address'),
							'contact' => $this->input->post('contact'),
						);
					if($this->db->insert('user_details', $data)) {
						// $this->session->set_flashdata('message', 'Successfully Added.');
						$logs = array(
							'user_id' => $this->session->userdata('id'),
							'transaction' => 'Add user ID:' . $insert_id,
							'datetime' => date('Y-m-d H:i:s')
						);
						if($this->db->insert('logs', $logs)) {
							redirect('admin/users');
						}
					} else {
						// $this->session->set_flashdata('message', 'Error, Please try again.');	
					}
				}else{
					echo "<script>alert('There is an error occured. Please try again.');</script>";
				}
			}
		}
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/add';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function edit($id) {

		if($this->input->post('submit')) {
			$email = $this->input->post('email');
			$accounts = array(
					'email' => $email,
					'password' => $this->M_User->hash($this->input->post('contact')),
					'role' => 'admin'
				);
			$this->db->where('id', $id);
			$this->db->update('user_accounts', $accounts);
			$data = array(
					'name' => $this->input->post('name'),
					'address' => $this->input->post('address'),
					'contact' => $this->input->post('contact'),
				);
			$this->db->where('user_id', $id);
			if($this->db->update('user_details', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Edit user ID:' . $id,
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					redirect('admin/users');
				}
			} else {
				// $this->session->set_flashdata('message', 'Error, Please try again.');	
			}
		}

		$this->data['user_id'] = $id;
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/edit';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function view($id) {
		$this->data['id'] = $id;
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/view';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->limit(1);
		$this->db->delete('user_accounts');

		$this->db->where('user_id', $id);
		$this->db->limit(1);
		if($this->db->delete('user_details')) {
			$logs = array(
				'user_id' => $this->session->userdata('id'),
				'transaction' => 'Delete user ID:' . $id,
				'datetime' => date('Y-m-d H:i:s')
			);
			if($this->db->insert('logs', $logs)) {
				redirect('admin/' .$this->page);
			}
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

}

?>