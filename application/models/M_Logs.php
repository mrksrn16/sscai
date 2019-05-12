<?php 
class M_Logs extends MY_Model
{
	protected $_table_name = 'logs';
	protected $_primary_key = 'id';
	
	function __construct() {
		parent::__construct();
	}

	public function filter_logs($date=NULL, $limit, $offset) {
		if($date) {
			$this->db->like('datetime', $date);
		}
		$this->db->limit($limit,$offset);
		return $this->db->get($this->_table_name)->result();	
	}

}

?>