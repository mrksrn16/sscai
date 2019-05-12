<?php 
class Dashboard extends Admin_Controller
{

	function __construct() {
		parent::__construct();
	}

    public function index() {
    	$admissions = $this->db->get('admissions')->result();
    	$messages = $this->db->get('messages')->result();
    	$this->data['admissions'] = $admissions;
    	$this->data['messages'] = $messages;
    	$this->data['subview'] = 'admin/dashboard';
    	$this->load->view('admin/main_layout', $this->data);
    }

}