<?php 
class Contact extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}
	public function index() {

		if($this->input->post('submit')) {
			$this->db->where('slug', 'telephone');
			$telephone = $this->db->get('about')->row();

			$this->db->where('slug', 'phone');
			$phone = $this->db->get('about')->row();


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
				$htmlContent = "<h1>Thank you for messaging us! </h1><p>For questions and inquiries you can call at ". $phone->content ." or " . $telephone->content." Monday to Friday, Office hours</p>";

				$this->email->to($this->input->post('email'));
				$this->email->from('sscai.dev@gmail.com','SSCAI - Message');
				$this->email->subject('SSCAI - Message');
				$this->email->message($htmlContent);

				//Send email
				if($this->email->send()){
					//Update table
					$data = array(
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'subject' => $this->input->post('subject'),
						'message' => $this->input->post('message'),
						'date' => date('Y-m-d H:i:s')
					);
					if($this->db->insert('messages', $data)) {
						$this->session->set_flashdata('message', 'Message sent! Thank you for messaging us. ');
					} else {
						$this->session->set_flashdata('message', 'Error. Please try again.');
					}
				}else{
					echo "<script>alert('There is an error occured. Please try again.');</script>";
				}
		}

		$this->db->where('slug', 'address');
		$this->data['address'] = $this->db->get('about')->row();

		$this->db->where('slug', 'telephone');
		$this->data['telephone'] = $this->db->get('about')->row();

		$this->db->where('slug', 'phone');
		$this->data['phone'] = $this->db->get('about')->row();

		$this->data['subview'] = 'contact';
		$this->load->view('main_layout', $this->data);
	}
	

}
?>