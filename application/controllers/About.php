<?php 
class About extends CI_Controller
{
	function __construct() {
		parent::__construct();
	}
	public function index() {

		$this->db->where('slug', 'why-you-choose');
		$this->data['why_you_choose'] = $this->db->get('about')->row();

		$this->db->where('slug', 'mission');
		$this->data['mission'] = $this->db->get('about')->row();

		$this->db->where('slug', 'vision');
		$this->data['vision'] = $this->db->get('about')->row();

		$this->db->where('slug', 'history');
		$this->data['history'] = $this->db->get('about')->row();

		$this->data['teachers'] = $this->db->get('facilities')->result();
		
		$this->data['subview'] = 'about';
		$this->load->view('main_layout', $this->data);
	}
	

}
?>