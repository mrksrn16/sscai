<?php 
class Teachers extends Admin_Controller
{
	public $page = 'teachers';
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['result'] = $this->M_Teachers->get();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function add() {
		if($this->input->post('submit')) {

			if($_FILES["picture"]["name"]){
				// Image upload
			    $config = array();
			    $config['upload_path'] = './uploads/teachers/';
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
				'name' => $this->input->post('name'),
				'slug' => $this->slugify($this->input->post('name')),
				'content' => $this->input->post('content'),
				'image' => $picture,
				'date_created' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('id')
			);
			if($this->db->insert('teachers', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				redirect('admin/'. $this->page);
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
			    $config['upload_path'] = './uploads/teachers/';
			    $config['allowed_types'] = 'gif|jpg|png|jpeg';
			    $this->load->library('upload', $config, 'imageupload');  // Create custom object for catalog upload
			    $this->imageupload->initialize($config);
			    $upload_picture = $this->imageupload->do_upload('picture');
			    $upload_picture_data = $this->imageupload->data();
			    $picture = $upload_picture_data['file_name'];

				$data = array(
					'name' => $this->input->post('name'),
					'slug' => $this->slugify($this->input->post('name')),
					'content' => $this->input->post('content'),
					'image' => $picture,
					'date_created' => date('Y-m-d H:i:s'),
					'created_by' => $this->session->userdata('id')
				);

			} else {
				
				$data = array(
					'name' => $this->input->post('name'),
					'slug' => $this->slugify($this->input->post('name')),
					'content' => $this->input->post('content'),
					'date_modified' => date('Y-m-d H:i:s'),
					'date_created' => date('Y-m-d H:i:s'),
					'created_by' => $this->session->userdata('id')
				);
			}

			$this->db->where('id', $id);
			if($this->db->update('teachers', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				redirect('admin/'. $this->page);
			}
		}

		$this->data['result'] = $this->M_Teachers->get($id);
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/edit';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function view($id) {
		$this->data['result'] = $this->M_Teachers->get($id);
		$this->data['id'] = $id;
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/view';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->limit(1);
		$this->db->delete('teachers');

		redirect('admin/' .$this->page);
	}

	public static function slugify($text) {
	  // replace non letter or digits by -
	  $text = strtolower(preg_replace('~[^\pL\d]+~u', '-', $text));

	  return $text;
	}


}

?>