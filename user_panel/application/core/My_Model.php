<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class My_Model extends CI_Model {

        public function get($num = 0){
                $query = $this->db->get($this->table,$num);
                return $query->result();
        }

        public function get_rows(){
                $query = $this->db->get($this->table);
                return $query->result();
        }

        public function get_row($val){
                $query = $this->db->get_where($this->table,$val);
                return $query->row();
        }

        public function get_where($val=''){
                $query = $this->db->get_where($this->table,$val);
                return $query->result();
        }

        public function get_where_in($key, $val = array()){
                $this->db->from($this->table);
                $this->db->where_in($key, $val);
                $query = $this->db->get();
                return $query->result();
        }

        public function insert($val){
                $this->db->insert($this->table, $val);
                return $this->db->affected_rows();
        }
        public function insert_get_id($val){
                $t = $this->db->insert($this->table, $val);
                return $this->db->insert_id();
        }

        public function delete($val){
                $this->db->delete($this->table, $val);
                return $this->db->affected_rows();
        }

        public function update($val,$where){
                return $this->db->update($this->table, $val, $where);
                return $this->db->trans_complete();
        }
}
