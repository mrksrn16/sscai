<?php 
class M_Activities extends MY_Model
{
	protected $_table_name = 'activities';
	protected $_primary_key = 'id';
	
	function __construct() {
		parent::__construct();
	}

	public function filter_activities($month, $year, $limit, $offset) {
		$where = "MONTH(date) = '$month' AND YEAR(date) = '$year'";
		$this->db->where($where);
		$this->db->limit($limit,$offset);
		$this->db->order_by('id', 'desc');
		return $this->db->get($this->_table_name)->result();	
	}

}

?>