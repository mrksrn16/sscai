<?php 
class M_Messages extends MY_Model
{
	protected $_table_name = 'messages';
	protected $_primary_key = 'id';
	
	function __construct() {
		parent::__construct();
	}

	public function check_pending() { 
		$this->db->where('status', 'pending');
		$res = $this->db->get('messages')->result();
		return count($res);
	}

}

?>