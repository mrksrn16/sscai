<?php 
class M_Admissions extends MY_Model
{
	protected $_table_name = 'admissions';
	protected $_primary_key = 'id';
	
	function __construct() {
		parent::__construct();
	}

	public function check_pending() { 
		$this->db->where('status', 'unseen');
		$res = $this->db->get('admissions')->result();
		return count($res);
	}

}

?>