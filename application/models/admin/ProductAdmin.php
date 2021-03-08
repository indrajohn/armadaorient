<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProductAdmin extends CI_Model{
    public function insertProduct($produk){
        $this->db->set($produk);
        $this->db->insert('tbl_produk');
    }
    public function getProduct(){
        $data = $this->db->query("SELECT p.*,k.nama as nama_category FROM tbl_produk p left join tbl_kategori k on k.id = p.id_kategori");
        return $data->result_array();
    }
    public function deleteProduct($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_produk');
    }
    public function editProduct($id,$data){
        $this->db->where('id', $id);
        $this->db->update('tbl_produk', $data);
    }
    public function getProductById($id){
        $data = $this->db->query("SELECT * FROM tbl_produk where id ='$id'");
        return $data->row();
    }
    public function getSearchByCategory($id_kategori,$from,$to){
        $data = $this->db->query("SELECT p.*,k.nama as nama_category
                                    FROM tbl_produk p
                                    left join tbl_kategori k
                                    on k.id = p.id_kategori
                                    where p.id_kategori = '$id_kategori'
                                    limit $from,$to");
        return $data->result_array();
    }
}
?>