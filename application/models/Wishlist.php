<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wishlist extends CI_Model{
    public function getWishlist($username){
        $data = $this->db->query("SELECT w.*,p.id as product_id,p.product_name,p.product_price,p.product_discount,p.product_url
                                 FROM tbl_wishlist w
                                 join tbl_user u 
                                 on w.user_id=u.id 
                                 join tbl_product p 
                                 on w.product_id = p.id 
                                 where u.username='$username'");
        return $data->result_array();
    }
    
    public function deleteWishlist($username,$id){
        $this->db->query("DELETE FROM tbl_wishlist w 
                                    join tbl_user u 
                                    on w.user_id=u.id 
                                    where u.username='$username' and w.product_id='$id'");
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
