<?php
class Admin_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->data['meta_title'] = 'SSCAI';
		//Loaded helpers,libraries,models
		$this->load->library('form_validation');
		$this->load->model('M_User');
		$this->load->model('M_Activities');
		$this->load->model('M_Announcements');
		$this->load->model('M_About');
		$this->load->model('M_Facilities');
		$this->load->model('M_Virtualtour');
		$this->load->model('M_Messages');
		$this->load->model('M_Admissions');
		$this->load->model('M_Teachers');
		$this->load->model('M_Gallery');
		$this->load->model('M_Albums');
		$this->load->model('M_Logs');

		//Login Check
		$exception_uris = array(
			'admin/user/login',
			'admin/user/logout',
			'admin/user/forgot_password',
			);
		if(in_array(uri_string(), $exception_uris) == FALSE)
		{
			if($this->M_User->loggedin() == FALSE)
			{
				redirect('admin/user/login');
			}
		}
	}
}
?>