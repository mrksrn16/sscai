<?php 
class Messages extends Admin_Controller
{
	public $page = 'messages';

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->data['result'] = $this->M_Messages->get();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function view($id) {
		$data = array(
				'status' => 'seen'
			);
		$this->db->where('id', $id);
		$this->db->update('messages', $data);

		$this->data['result'] = $this->M_Messages->get($id);
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/view';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->delete('messages')) {
			$logs = array(
				'user_id' => $this->session->userdata('id'),
				'transaction' => 'Delete message ID:' . $id,
				'datetime' => date('Y-m-d H:i:s')
			);
			if($this->db->insert('logs', $logs)) {
				redirect('admin/'. $this->page);
			}
		}
	}

	public function reply($id) {
		$message = $this->M_Messages->get($id);
		$usr_email = $message->email;

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

		//Email content
		$htmlContent = $this->input->post('content');

		$this->email->to($usr_email);
		$this->email->from('sscai.dev@gmail.com','SSCAI - Reply Inquiry');
		$this->email->subject('Reply Inquiry');
		$this->email->message($htmlContent);

		//Send email
		if($this->email->send()){
			$this->session->set_flashdata('message', 'Email Sent.');
			redirect('admin/messages/view/' . $id);
		}else{
			echo "<script>alert('There is an error occured. Please try again.');</script>";
		}

	}

}

?>