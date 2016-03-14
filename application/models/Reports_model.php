<?php
class Reports_model extends CI_Model{
    
    public function getAllContactAmount($table_name, $select_year){
        $this->db->select('*');
        //$this->db->select_sum('debit');
        // $this->db->where('date >=', $start_date);
        // $this->db->where('date <=', $end_date);
        //$this->db->group_by('date');

        if($select_year['hajj_year']!='all'){
            $this->db->where($select_year);
        }
        
        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function contact_and_due_statement($table_name, $where){
        $this->db->select('*');
        // $this->db->select_sum('amount');
        $this->db->where($where);
        // $this->db->group_by('haji_id');

        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->row_array();
        return $result;
    }

    public function income_ledger_statement($income_group_id=NULL, $income_head_id=NULL, $payment_mode=NULL, $start_date=NULL, $end_date=NULL){

        if ($income_group_id==NULL && $income_head_id==NULL && $payment_mode==NULL && $start_date == NULL && $end_date == NULL) {
            $start_date = date("Y-m-d");
            $end_date = date("Y-m-d");
        }

        if ($income_group_id!=NULL) {
            $this->db->where('payment_group', $income_group_id);
        }

        if ($income_head_id!=NULL) {
            $this->db->where('payment_head', $income_head_id);
        }

        if ($payment_mode!=NULL) {
            $this->db->where('payment_mode', $payment_mode);
        }

        if ($start_date!=NULL) {
            $this->db->where('payment_date >=', $start_date);
        }

        if ($end_date!=NULL) {
            $this->db->where('payment_date <=', $end_date);
        }

        $this->db->from('money_receipt');

        $query_result=$this->db->get();

        $result=$query_result->result();
        return $result;

    }

    public function expense_ledger_statement($expense_group_id=NULL, $expense_head_id=NULL, $payment_mode=NULL, $start_date=NULL, $end_date=NULL){

        if ($expense_group_id==NULL && $expense_head_id==NULL && $payment_mode==NULL && $start_date == NULL && $end_date == NULL) {
            $start_date = date("Y-m-d");
            $end_date = date("Y-m-d");
        }

        if ($expense_group_id!=NULL) {
            $this->db->where('expense_group_id', $expense_group_id);
        }

        if ($expense_head_id!=NULL) {
            $this->db->where('expense_head_id', $expense_head_id);
        }

        if ($payment_mode!=NULL) {
            $this->db->where('payment_mode', $payment_mode);
        }

        if ($start_date!=NULL) {
            $this->db->where('date >=', $start_date);
        }

        if ($end_date!=NULL) {
            $this->db->where('date <=', $end_date);
        }

        $this->db->from('expense_entry');

        $query_result=$this->db->get();

        $result=$query_result->result();
        return $result;

    }
}