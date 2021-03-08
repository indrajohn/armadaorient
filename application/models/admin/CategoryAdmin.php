<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryAdmin extends CI_Model{
    public function getCategory(){
        $data = $this->db->query("SELECT * FROM tbl_kategori");
        return $data->result_array();
    }
    public function insertCategory($data){
        $this->db->insert("tbl_kategori",$data);
    }
    public function deleteCategory($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_kategori');
    }

    public function editCategory($id,$data){
        $this->db->where('id', $id);
        $this->db->update('tbl_kategori', $data);
    }

    public function getCategoryById($id){
        $data = $this->db->query("SELECT * FROM tbl_kategori where id = $id");
        return $data->row();
    }
}
?>