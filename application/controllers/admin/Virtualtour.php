<?php 
class Virtualtour extends Admin_Controller
{
	public $page = 'virtualtour';
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['result'] = $this->M_Virtualtour->get();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function add() {
		if($this->input->post('submit')) {

			if($_FILES["picture"]["name"]){
				// Image upload
			    $config = array();
			    $config['upload_path'] = './uploads/virtualtour/';
			    $config['allowed_types'] = 'gif|jpg|png|jpeg';
			    $this->load->library('upload', $config, 'imageupload');  // Create custom object for catalog upload
			    $this->imageupload->initialize($config);
			    $upload_picture = $this->imageupload->do_upload('picture');
			    $upload_picture_data = $this->imageupload->data();
			    $picture = $upload_picture_data['file_name'];
			} else {
				$picture = 'default.png';
			}

			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image' => $picture,
			);
			if($this->db->insert('virtual_tour', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Add virtual tour ID:' . $this->db->insert_id(),
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					redirect('admin/'. $this->page);
				}
			}
		}
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/add';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function edit($id) {

		if($this->input->post('submit')) {
			if($_FILES["picture"]["name"]){
				// Image upload
			    $config = array();
			    $config['upload_path'] = './uploads/virtualtour/';
			    $config['allowed_types'] = 'gif|jpg|png|jpeg';
			    $this->load->library('upload', $config, 'imageupload');  // Create custom object for catalog upload
			    $this->imageupload->initialize($config);
			    $upload_picture = $this->imageupload->do_upload('picture');
			    $upload_picture_data = $this->imageupload->data();
			    $picture = $upload_picture_data['file_name'];

				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'image' => $picture,
				);

			} else {
				
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
				);
			}

			$this->db->where('id', $id);
			if($this->db->update('virtual_tour', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Edit virtual tour ID:' . $id,
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					redirect('admin/'. $this->page);
				}
			}
		}

		$this->data['result'] = $this->M_Virtualtour->get($id);
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/edit';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function view($id) {
		$this->data['result'] = $this->M_Virtualtour->get($id);
		$this->data['id'] = $id;
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/view';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->delete('virtual_tour')) {
			$logs = array(
				'user_id' => $this->session->userdata('id'),
				'transaction' => 'Delete virtual tour ID:' . $id,
				'datetime' => date('Y-m-d H:i:s')
			);
			if($this->db->insert('logs', $logs)) {
				redirect('admin/'. $this->page);
			}
		}
	}

	public function isShow($id) {
		$data = array(
			'isShow' => $this->input->post('status')
			);
		$this->db->where('id', $id);
		if($this->db->update('virtual_tour', $data)) {
			$logs = array(
				'user_id' => $this->session->userdata('id'),
				'transaction' => 'Change show virtual tour ID:' . $id . ' to ' . $this->input->post('status'),
				'datetime' => date('Y-m-d H:i:s')
			);
			if($this->db->insert('logs', $logs)) {
				redirect('admin/virtualtour');
			}
		}
	}

}

?>