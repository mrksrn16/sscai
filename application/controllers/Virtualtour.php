<?php 
class Virtualtour extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}
	public function index() {
		
		$this->db->where('isShow', 'yes');
		$this->db->limit(3);
		$this->db->order_by('id', 'desc');
		$this->data['slides'] = $this->db->get('virtual_tour')->result();

		// $this->data['subview'] = 'virtualtour';
		$this->load->view('virtualtour', $this->data);
	}

}
?>