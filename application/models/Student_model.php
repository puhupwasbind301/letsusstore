<?php
class Students_model extends CI_Model {
	protected $table = 'students_data';
	public function __construct() {
        parent::__construct();
    }
	
    public function get_count() {
        return $this->db->count_all($this->table);
    }
	
    public function get_students($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
		return $query->result();
    }

    // public function get_authors($limit, $start) {
    //     $this->db->limit($limit, $start);
    //         $query = $this->db->get($this->table);
    //         return $query->result();
    // }



}

?>