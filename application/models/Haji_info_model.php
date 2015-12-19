<?php
class Haji_info_model extends CI_Model{
    
    public function new_haji_registration($data){
        $this->db->insert('haji_info', $data);
    }

    public function pilgrim_list(){
    	$this->db->select('*');
    	$this->db->from('haji_info');

    	$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}