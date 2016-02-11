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

    public function hajj_contact_and_due_statement($table_name, $select_year){
        $this->db->select('*');
        //$this->db->select_sum('debit');
        // $this->db->where('date >=', $start_date);
        // $this->db->where('date <=', $end_date);
        //$this->db->group_by('date');
        $this->db->where($select_year);
        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function contact_and_due_statement($table_name, $where){
        $this->db->select('*');
        $this->db->select_sum('debit');
        $this->db->where($where);
        $this->db->group_by('haji_id');

        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}