<?php 
class Gallery extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('M_Albums');
	}
	public function index() {
		$this->db->order_by('id', 'desc');
		$this->db->limit(10);
		$this->data['gallery'] = $this->db->get('gallery')->result();
		$this->data['album_id'] = NULL;
		$this->data['albums'] = $this->M_Albums->get();
		$this->data['subview'] = 'gallery';
		$this->load->view('main_layout', $this->data);
	}

	public function album() {
		$id = $this->input->post('album');
		$this->data['album_id'] = $id;
		$this->db->where('album', $id);
		$this->data['gallery'] = $this->db->get('gallery')->result();
		$this->data['albums'] = $this->M_Albums->get();
		$this->data['subview'] = 'gallery';
		$this->load->view('main_layout', $this->data);
	}

}

?>