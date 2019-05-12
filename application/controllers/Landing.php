<?php 
class Landing extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['slides'] = $this->db->get('virtual_tour')->result();
		$this->load->view('landing', $this->data);
	}

}
?>