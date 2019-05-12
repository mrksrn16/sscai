<?php 
class Gallery extends Admin_Controller
{
	public $page = 'gallery';
	function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['result'] = $this->M_Gallery->get();
		$this->data['page'] = $this->page;
		$this->data['subview'] = 'admin/'. $this->page .'/index';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function add($album) {
		if($this->input->post('submit')) {

			if($_FILES["picture"]["name"]){
				// Image upload
			    $config = array();
			    $config['upload_path'] = './uploads/gallery/';
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
				'album' => $album,
				'date' => $this->input->post('date'),
				'caption' => $this->input->post('caption'),
				'image' => $picture,
			);
			if($this->db->insert('gallery', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Add gallery ID:' . $this->db->insert_id(),
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					redirect('admin/albums/view/' . $album);
				}
			}
		}
		$this->data['page'] = 'albums/view/' . $album;
		$this->db->where('id', $album);
		$album = $this->db->get('albums')->row();
		$this->data['album'] = $album->title;
		
		$this->data['subview'] = 'admin/'. $this->page .'/add';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function edit($id) {
		$result = $this->M_Gallery->get($id);

		if($this->input->post('submit')) {
			if($_FILES["picture"]["name"]){
				// Image upload
			    $config = array();
			    $config['upload_path'] = './uploads/gallery/';
			    $config['allowed_types'] = 'gif|jpg|png|jpeg';
			    $this->load->library('upload', $config, 'imageupload');  // Create custom object for catalog upload
			    $this->imageupload->initialize($config);
			    $upload_picture = $this->imageupload->do_upload('picture');
			    $upload_picture_data = $this->imageupload->data();
			    $picture = $upload_picture_data['file_name'];

				$data = array(
					'title' => $this->input->post('title'),
					'date' => $this->input->post('date'),
					'caption' => $this->input->post('caption'),
					'image' => $picture,
					'album' => $this->input->post('album'),
				);

			} else {
				
				$data = array(
					'title' => $this->input->post('title'),
					'caption' => $this->input->post('caption'),
					'date' => $this->input->post('date'),
					'album' => $this->input->post('album'),
				);
			}

			$this->db->where('id', $id);
			if($this->db->update('gallery', $data)) {
				// $this->session->set_flashdata('message', 'Successfully Added.');
				$logs = array(
					'user_id' => $this->session->userdata('id'),
					'transaction' => 'Edit gallery ID:' . $id,
					'datetime' => date('Y-m-d H:i:s')
				);
				if($this->db->insert('logs', $logs)) {
					redirect('admin/albums/view/' . $result->album);
				}
			}
		}
		
		$this->data['result'] = $result;
		$this->data['page'] = 'albums/view/' . $result->album;
		$this->data['albums'] = $this->M_Albums->get();
		$this->data['subview'] = 'admin/'. $this->page .'/edit';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function view($id) {
	    $result = $this->M_Gallery->get($id);
		$this->data['result'] = $result;
		$this->data['id'] = $id;
		$this->data['page'] = 'albums/view/' . $result->album;
		$this->data['subview'] = 'admin/'. $this->page .'/view';
		$this->load->view('admin/main_layout', $this->data);
	}

	public function delete($id) {

		$result = $this->M_Gallery->get($id);
		$redirect = 'admin/albums/view/' . $result->album;

		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->delete('gallery')) {
			$logs = array(
				'user_id' => $this->session->userdata('id'),
				'transaction' => 'Delete gallery ID:' . $id,
				'datetime' => date('Y-m-d H:i:s')
			);
			if($this->db->insert('logs', $logs)) {
				redirect($redirect);
			}
		}
	}

	public static function slugify($text) {
	  // replace non letter or digits by -
	  $text = strtolower(preg_replace('~[^\pL\d]+~u', '-', $text));

	  return $text;
	}


}

?>