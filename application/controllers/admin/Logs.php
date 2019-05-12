<?php 
class Logs extends Admin_Controller
{
	public $page = 'logs';
	function __construct() {
		parent::__construct();
	}
	public function index() {
		
		$config['base_url'] = base_url() . 'admin/logs/index/';
		$config['per_page'] = 10;
		$config['total_rows'] = count($this->M_Logs->get());
		$offset = $this->uri->segment(4);
		$this->data['offset'] = $offset;
		$this->pagination->initialize($config);
		$this->data['result'] = $this->M_Logs->filter_logs(NULL, $config['per_page'],$offset);

		$this->data['page'] = $this->page;
		$this->data['printLogs'] = $this->M_Logs->get();
		$this->data['date'] = NULL;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}
	public function filter($date=NULL) {
		if($this->input->post('date')) {
			$date = $this->input->post('date');	
			$this->session->set_userdata(array('logs_filter' => $date));
		} else {
			$date = $this->session->userdata('logs_filter');			
		}
		$this->data['page'] = $this->page;
		$this->data['date'] = $date;
		// $where = "CONVERT(date, getdate())";
		$this->db->like('datetime', $date);
		$logs = $this->db->get('logs')->result();
		$this->data['printLogs'] = $logs;
		$config['base_url'] = base_url() . 'admin/logs/filter/';
		$config['per_page'] = 10;
		$config['total_rows'] = count($logs);
		$offset = $this->uri->segment(4);
		$this->data['offset'] = $offset;
		$this->pagination->initialize($config);
		// $this->data['result'] = $logs;
		$this->data['result'] = $this->M_Logs->filter_logs($date, $config['per_page'],$offset);

		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);

	}
	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->delete('logs')) {
			redirect('admin/logs');
		}
	}

}
?>