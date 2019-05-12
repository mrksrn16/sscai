<?php 
class Home extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}
	public function index() {

		$this->db->where('slug', 'why-you-choose');
		$this->data['why_you_choose'] = $this->db->get('about')->row();

		$this->db->limit(3);
		$this->data['announcements'] = $this->db->get('announcements')->result();

		$this->db->limit(3);
		$this->data['activities'] = $this->db->get('activities')->result();

		$this->db->where('isShow', 'yes');
		$this->db->limit(3);
		$this->db->order_by('id', 'desc');
		$this->data['slides'] = $this->db->get('virtual_tour')->result();

		// $this->data['subview'] = 'home';
		$this->load->view('home', $this->data);
	}
	

}
?>