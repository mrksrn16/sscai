<?php 
class M_User extends MY_Model
{
	protected $_table_name = 'user_accounts';
	protected $_primary_key = 'id';
	public $rules = array(
			'email' => array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required'
				),
			'password' => array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required'
				),
			);
	function __construct()
	{
		parent::__construct();
	}

	

	public function login()
	{
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password'))
			), TRUE);
		if(count($user))
		{
			if($user->status == 1) {
				$session_key = $this->sessionKey();
				$data = array(
					'email' => $user->email,
					'role' => $user->role,
					'id' => $user->id,
					'logged_in' => TRUE,
					'session_key' => $session_key,
					);
				$this->session->set_userdata($data);
				$logs = array(
					'user_id' => $user->id,
					'login' => date('h:i:s a'),
					'date' => date('Y-m-d'),
					'session_key' => $session_key,
				);
				$this->db->insert('login_logs', $logs);
			} else {
				$data = array(
				'logged_in' => FALSE
				);
				$this->session->set_userdata($data);
			}
		}
		else
		{
			$data = array(
				'logged_in' => FALSE
				);
			$this->session->set_userdata($data);
		}
	}
	public function loggedin()
	{
		return (bool)$this->session->userdata('logged_in');
	}
	public function logout()
	{
		$data = array(
			'logout' => date('h:i:s a')
		);
		$session_key = $this->session->userdata('session_key');
		$this->db->where('session_key', $session_key);
		if($this->db->update('login_logs', $data)) {
			$this->session->sess_destroy();
		}
	}
	public function hash($string)
	{
		return hash('md5',$string);
	}
	public function get_by_id($id) {
		$this->db->where('user_id', $id);
		return $this->db->get('user_details')->row();
	}
	
	public function get_by_role($role) {
		$this->db->where('role', $role);
		$this->db->order_by('id', 'desc');
		return $this->db->get('user_accounts')->row();
	}

	public function get_all() {
		$this->db->order_by('id', 'desc');
		return $this->db->get('user_details')->result();
	}

	public function get_all_by_branch($branch_id) {
		$this->db->where('branch_id', $branch_id);
		$this->db->order_by('id', 'desc');
		return $this->db->get('user_accounts')->result();
	}

	public function get_by_status($status) {
		$this->db->where('status', $status);
		$this->db->order_by('id', 'desc');
		return $this->db->get('user_details')->result();
	}

	public function search($keyword) {
		$this->db->like('name', $keyword);
     	$this->db->or_like('address', $keyword);
     	$this->db->or_like('contact', $keyword);
     	// $this->db->or_like('email', $keyword);
     	$query = $this->db->get('user_details');
     	$this->db->order_by('id', 'desc');
     	return $query->result();

     	// return $this->db->get('user_details')->result();
	}
	public function manager_search_user($branch_id, $keyword) {
		$this->db->like('name', $keyword);
     	$this->db->or_like('address', $keyword);
     	$this->db->or_like('contact', $keyword);
     	// $this->db->or_like('email', $keyword);
     	$query = $this->db->get('user_details');
     	$this->db->order_by('id', 'desc');
     	return $query->result();

     	// return $this->db->get('user_details')->result();
	}

	public function get_accounts($id) {
		$this->db->where('id', $id);
		return $this->db->get('user_accounts')->row();
	}

	public function sessionKey() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $key = array(); //remember to declare $key as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 10; $i++) {
	        $n = rand(0, $alphaLength);
	        $key[] = $alphabet[$n];
	    }
	    return implode($key); //turn the array into a string
	}
}

?>