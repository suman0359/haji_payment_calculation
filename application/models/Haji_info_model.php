<?php
class Haji_info_model extends CI_Model{
    
    public function new_haji_registration($data){
        $this->db->insert('haji_info', $data);
    }


    public function select_haji_for_payment($id){
        $this->db->select('id, haji_id, haji_name, haji_passport');
        $this->db->where('id', $id);
        $this->db->from('haji_information');

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

    public function contact_ammount($id){
        $this->db->select('total_amount');
        $this->db->where('id', $id);
        $this->db->from('haji_information');

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}