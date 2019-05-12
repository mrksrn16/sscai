<?php 
class Enrollment extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}
	public function index() {
		if($this->input->post('submit')) {
			$data = array(
				'lastname' => $this->input->post('lastname'),
				'firstname' => $this->input->post('firstname'),
				'middlename' => $this->input->post('middlename'),
				'gender' => $this->input->post('gender'),
				// 'address' => $this->input->post('address'),
				'house_number' => $this->input->post('house_number'),
				'house_street' => $this->input->post('house_street'),
				'house_brgy' => $this->input->post('house_brgy'),
				'house_city' => $this->input->post('house_city'),
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
			if($this->db->insert('admissions', $data)) {
				$this->session->set_flashdata('message', 'Successful! Your admission is sent.');
			} else {
				$this->session->set_flashdata('message', 'There is an error please try again.');
			}
		}
		$this->data['subview'] = 'enrollment';
		$this->load->view('main_layout', $this->data);
	}
	

}
?>
