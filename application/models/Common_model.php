<?php
class Common_model extends CI_Model{
    
    public function insert($table_name, $data){
        $this->db->insert($table_name, $data);
    }

    public function selectAll($table_name){
    	$this->db->select('*');
    	$this->db->from($table_name);

    	$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}