<?php
class Common_model extends CI_Model{
    
    public function insert($table_name, $data){
        $this->db->insert($table_name, $data);
    }
    
    public function update($table_name, $data, $id){
        $this->db->where($id);
        $this->db->update($table_name, $data);
    }

    public function selectAll($table_name, $order = NULL){
    	$this->db->select('*');

        if (!($order == NULL)) {
            $this->db->order_by($order);
        }

    	$this->db->from($table_name);

    	$query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function selectNameWhere($table_name, $field_name, $id){
        //$this->db->select($field_name);
        $this->db->where($id);

        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

    public function getInfo($table, $id) {
        $this->db->from($table);
        $this->db->where('status !=', 13);
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function selectWhere($table_name, $id, $order = NULL){
        $this->db->select('*');
        $this->db->where($id);

        if (!($order == NULL)) {
            $this->db->order_by($order);
        }

        $this->db->from($table_name);

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function delete($table_name, $id){
        $this->db->where($id);
        $this->db->delete($table_name);
    }
}
