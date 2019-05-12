<?php 
class Activities extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('M_Activities');
	}
	public function index() {

		$this->db->order_by('id', 'desc');
		$this->db->limit(6);
		$this->data['activities'] = $this->db->get('activities')->result();
		$this->data['filter_month'] = NULL;
		$this->data['filter_year'] = NULL;
		$this->data['subview'] = 'activities/index';
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
		$activities = $this->db->get('activities')->result();

		$this->data['filter_month'] = $month;
		$this->data['filter_year'] = $year;
		$config['base_url'] = base_url() . 'activities/filter/';
		$config['per_page'] = 6;
		$config['total_rows'] = count($activities);
		$offset = $this->uri->segment(3);
		$this->data['offset'] = $offset;
		$this->pagination->initialize($config);
		
		$this->data['activities'] = $this->M_Activities->filter_activities($month, $year, $config['per_page'],$offset);

		$this->data['subview'] = 'activities/index';
		$this->load->view('main_layout', $this->data);
	}
	public function view($slug) {
		$this->db->where('slug', $slug);
		$this->data['activity'] = $this->db->get('activities')->row();
		$this->data['subview'] = 'activities/view';
		$this->load->view('main_layout', $this->data);
	}
	

}
?>