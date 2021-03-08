<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Model{
    public function getCart($username){
        $data = $this->db->query("SELECT c.*,p.id as id_product,p.nama_produk,p.harga_produk,p.discount,p.url_produk
                                 FROM tbl_cart c 
                                 join tbl_user u 
                                 on c.id_user=u.id 
                                 join tbl_produk p 
                                 on c.id_produk = p.id 
                                 where u.username='$username'");
        return $data->result_array();
    }
    public function getCountCart($username,$id){
       
        $data = $this->db->query("SELECT c.id_produk
                                    FROM tbl_cart c
                                    join tbl_user u 
                                    on c.id_user=u.id
                                    where u.username='$username' and c.id_produk='$id'");
        return $data->num_rows();
    }
    public function deleteCartByID($username,$id){
        $this->db->query("DELETE c.* 
                                    FROM tbl_cart c 
                                    join tbl_user u 
                                    on c.id_user=u.id 
                                    where u.username='$username' and c.id_produk='$id'");
    }
    public function updateTotalProduct($username,$id,$total_product){
        $this->db->query("UPDATE tbl_cart c
                            join tbl_user u 
                            on c.id_user=u.id 
                            set c.total_produk = '$total_product'
                         where u.username='$username' and c.id_produk='$id'");
    }
    public function addCart($data){
        $this->db->insert("tbl_cart",$data);
    }
    public function getTotalProduct($username,$id){
        $data = $this->db->query("SELECT c.total_produk
        FROM tbl_cart c 
        join tbl_user u 
        on c.id_user=u.id
        where u.username='$username' and c.id_produk='$id'");
        $result = $data->row();
        return $result->total_produk;
    }
}
?>