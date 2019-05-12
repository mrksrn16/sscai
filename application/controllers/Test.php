<?php
class Test extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->data['subview'] = 'test';
		$this->load->view('main_layout', $this->data);
	}
}


?>