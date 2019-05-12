<?php 
class Admissions extends Admin_Controller
{
	public $page = 'admissions';
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->data['result'] = $this->M_Admissions->get();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function view($id) {
		$this->db->where('id', $id);
		$chk = $this->db->get('admissions')->row();
		if($chk->status == 'unseen') {
			$data = array(
				'status' => 'pending'
			);
			$this->db->where('id', $id);
			$this->db->update('admissions', $data);
		}

		$this->data['id'] = $id;
		$this->data['result'] = $this->M_Admissions->get($id);
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/view';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function accept($id) {

		$this->db->where('id', $id);
		$admission = $this->db->get('admissions')->row();

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
  //           'protocol' => 'smtp',
  //           'smtp_host' => 'ssl://smtp.googlemail.com',
  //           'smtp_port' => 465,
  //           'smtp_user' => 'sscai.dev@gmail.com',
  //           'smtp_pass' => 'sscai123',
  //           'charset'   => 'iso-8859-1'
  //       );
  //       $this->load->library('email', $config);
  //       $this->email->set_newline("\r\n");
  //       $this->email->set_mailtype("html");


		//Email content
		$htmlContent = "
			<h3>Congratulations! Your admission to Saint Simon Cyrene Academy, Inc. is accepted</h3>
			<p>Kindly download this <a href='https://drive.google.com/file/d/1-shRpdewbLL4cEOaYouEHjzTRuebQ5Az/view' target='_blank'>form</a>, bring and validate on Registrar Office.</p>
			<p>For questions and inquiries you can call at ". $phone->content ." or " . $telephone->content." Monday to Friday, Office hours</p>
			<p>Thanks</p>
			<p>Regards,</p>
			<p>sscai</p>
		";

		$this->email->to($admission->email);
		$this->email->from('sscai.dev@gmail.com','SSCAI - Admission Accepted');
		$this->email->subject('SSCAI - Admission Accepted');
		$this->email->message($htmlContent);

		//Send email
		if($this->email->send()){
			$smsContent = "Congratulations! Your admission to Saint Simon Cyrene Academy, Inc. is accepted. For questions and inquiries you can call at ". strip_tags($phone->content) ." or " . strip_tags($telephone->content)." Monday to Friday, Office hours \n";
			$smsContent .= "Regards, \n";
			$smsContent .= "sscai";

			$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU1MzQ5NzA2MSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY5MzY4LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.vRAvK0v3S7i_x1TsMjCipM5S_MDtNPvQ4MT0M9ZYqds";
	        $deviceID = 110283;
	        $options = [];
			$phone_number = $admission->contact;
            $message = $smsContent;
            $smsGateway = new SmsGateway($token);
            $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);

            if($result) {
				//Update table
				$data = array(
					'status' => 'accepted'
				);
				$this->db->where('id', $id);
				if($this->db->update('admissions', $data)) {
					$this->session->set_flashdata('message', 'Admission accepted. Email sent to ' . $admission->email . '. SMS send to ' . $admission->contact);
					$logs = array(
						'user_id' => $this->session->userdata('id'),
						'transaction' => 'Accept admission ID:' . $id,
						'datetime' => date('Y-m-d H:i:s')
					);
					if($this->db->insert('logs', $logs)) {
						redirect('admin/admissions/view/' . $id , 'refresh');
					}
				}
            }

		}else{
			$this->session->set_flashdata('message', 'Error. Please try again. ');
			redirect('admin/admissions/view/' . $id , 'refresh');
		}
	}

	public function reject($id) {
		$this->db->where('id', $id);
		$admission = $this->db->get('admissions')->row();

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


		//Email content
		$htmlContent = "
			<h3>Sorry! Your admission to Saint Simon Cyrene Academy, Inc. is rejected</h3>
			<p>For questions and inquiries you can call at ". $phone->content ." or " . $telephone->content." Monday to Friday, Office hours</p>
			<p>Thanks</p>
			<p>Regards,</p>
			<p>sscai</p>

		";

		$this->email->to($admission->email);
		$this->email->from('sscai.dev@gmail.com','SSCAI - Admission Rejected');
		$this->email->subject('SSCAI - Admission Rejected');
		$this->email->message($htmlContent);

		//Send email
		if($this->email->send()){
			$smsContent = "Sorry! Your admission to Saint Simon Cyrene Academy, Inc. is rejected. For questions and inquiries you can call at ". strip_tags($phone->content) ." or " . strip_tags($telephone->content)." Monday to Friday, Office hours \n";
			$smsContent .= "Regards, \n";
			$smsContent .= "sscai";

			$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU1MzQ5NzA2MSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY5MzY4LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.vRAvK0v3S7i_x1TsMjCipM5S_MDtNPvQ4MT0M9ZYqds";
	        $deviceID = 110283;
	        $options = [];
			$phone_number = $admission->contact;
            $message = $smsContent;
            $smsGateway = new SmsGateway($token);
            $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);

            if($result) {
            	$data = array(
					'status' => 'rejected'
				);
				$this->db->where('id', $id);
				if($this->db->update('admissions', $data)) {
					$this->session->set_flashdata('message', 'Admission rejected. Email sent to ' . $admission->email. '. SMS send to ' . $admission->contact);
					$logs = array(
						'user_id' => $this->session->userdata('id'),
						'transaction' => 'Reject admission ID:' . $id,
						'datetime' => date('Y-m-d H:i:s')
					);
					if($this->db->insert('logs', $logs)) {
						redirect('admin/admissions/view/' . $id , 'refresh');
					}
				}
            }

		}else{
			$this->session->set_flashdata('message', 'Error. Please try again. ');
			redirect('admin/admissions/view/' . $id , 'refresh');
		}
	}

	public function edit($id) {

		if($this->input->post('submit')) {
			$data = array(
				'lastname' => $this->input->post('lastname'),
				'firstname' => $this->input->post('firstname'),
				'middlename' => $this->input->post('middlename'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'grade_level' => $this->input->post('grade_level'),
				'contact' => $this->input->post('contact'),
				'father_name' => $this->input->post('father_name'),
				'father_occupation' => $this->input->post('father_occupation'),
				'father_number' => $this->input->post('father_number'),
				'mother_name' => $this->input->post('mother_name'),
				'mother_occupation' => $this->input->post('mother_occupation'),
				'mother_number' => $this->input->post('mother_number'),
				'date' => date('Y-m-d H:i:s')
			);
			$this->db->where('id', $id);
			if($this->db->update('admissions', $data)) {
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Edit admission ID:' . $id,
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					$this->session->set_flashdata('message', 'Successful! Data updated.');
				}
			} else {
				$this->session->set_flashdata('message', 'There is an error please try again.');
			}
		}

		$this->data['id'] = $id;
		$this->data['result'] = $this->M_Admissions->get($id);
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/edit';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->limit(1);
		$this->db->delete('admissions');

		$logs = array(
			'user_id' => $this->session->userdata('id'),
			'transaction' => 'Delete admission ID:' . $id,
			'datetime' => date('Y-m-d H:i:s')
		);
		if($this->db->insert('logs', $logs)) {
			redirect('admin/' .$this->page);
		}
		
	}

}

?>