<?php 
class Welcome extends Admin_Controller
{

	function __construct() {
		parent::__construct();
        // $this->load->library('SmsGateway');
	}

    public function index() {
    	$this->load->view('admin/welcome');
    }

}