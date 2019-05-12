<?php 
class Announcements extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('M_Announcements');
	}
	public function index() {
		// $month = date('m');
		// $this->db->where('MONTH(date)', $month);
		$this->db->order_by('id', 'desc');
		$this->db->limit(6);
		$this->data['announcements'] = $this->db->get('announcements')->result();
		$this->data['filter_month'] = NULL;
		$this->data['filter_year'] = NULL;
		$this->data['subview'] = 'announcements/index';
		$this->load->view('main_layout', $this->data);
	}

	public function filter() {
		if($this->input->post('month')) { 
			$month = $this->input->post('month');
			$this->session->set_userdata(array('month_filter' => $month));
		} else {
			if($this->session->userdata('month_filter')) {
				$month = $this->session->userdata('month_filter');
			} else {
				$month = date('m');
			}
		}
		if($this->input->post('year')) { 
			$year = $this->input->post('year');
			$this->session->set_userdata(array('year_filter' => $year));
		} else {
			if($this->session->userdata('year_filter')) {
				$year = $this->session->userdata('year_filter');
			} else {
				$year = date('Y');
			}
		}

		$where = "MONTH(date) = '$month' AND YEAR(date) = '$year'";
		$this->db->where($where);
		$announcements = $this->db->get('announcements')->result();

		$this->data['filter_month'] = $month;
		$this->data['filter_year'] = $year;
		$config['base_url'] = base_url() . 'announcements/filter/';
		$config['per_page'] = 6;
		$config['total_rows'] = count($announcements);
		$offset = $this->uri->segment(3);
		$this->data['offset'] = $offset;
		$this->pagination->initialize($config);
		
		$this->data['announcements'] = $this->M_Announcements->filter_announcements($month, $year, $config['per_page'],$offset);

		$this->data['subview'] = 'announcements/index';
		$this->load->view('main_layout', $this->data);
	}

	public function view($slug) {
		$this->db->where('slug', $slug);
		$this->data['announcement'] = $this->db->get('announcements')->row();
		$this->data['subview'] = 'announcements/view';
		$this->load->view('main_layout', $this->data);
	}
	

}
?>