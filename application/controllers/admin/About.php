<?php 
class About extends Admin_Controller
{
	public $page = 'about';
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['result'] = $this->M_About->get();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}
	
	public function edit($id) {
		$result = $this->M_About->get($id);
		if($this->input->post('submit')) {
			$data = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
			);

			$this->db->where('id', $id);
			if($this->db->update('about', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Edit about section:' . $result->slug,
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					redirect('admin/'. $this->page);
				}
			}
		}

		$this->data['result'] = $result;
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/edit';
		$this->load->view('admin/main_layout', $this->data);
	}

}

?>