<?php
class Haji_info_model extends CI_Model{
    
    public function new_haji_registration($data){
        $this->db->insert('haji_info', $data);
    }
}