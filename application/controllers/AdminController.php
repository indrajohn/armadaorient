<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public $debug;
	public $upload_path;
	// public function index()
	// {
	// 	//$this->load->view('admin/overview');
	// }

	function __construct() {
		parent::__construct();
		require_once("phpDebug.php");
		$this->debug= new PHPDebug();
		$this->upload_path = $_SERVER['DOCUMENT_ROOT'].'/armadaorient/upload/product';
		$this->load->library('form_validation');

		$this->load->model('admin/ProductAdmin');
		$this->load->model('admin/CategoryAdmin');
	 }
    public function index()
	{
		// $this->load->model('Product_Model');

		// $data['data'] = $this->Product_Model->getProduk();
		$this->login();
    }
    public function dashboard(){
        $this->load->view('admin/overview');
	}
	public function login(){
		$this->load->view('admin/login');
	}
	public function clear_field_data() {
		$_POST = array();
		$this->_field_data = array();
		return $this;
	}
	private function _uploadImage($nama,$upload_path)
    {
        $config['upload_path']          = $upload_path;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $nama;
        $config['overwrite']			= true;
        $config['max_size']             = 5000; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
		}
		var_dump($upload_path);
		var_dump($this->upload->display_errors());
		$this->debug->debug($upload_path);
		$this->debug->debug($this->upload->display_errors());
		return "default.jpg";
    }


    //----------------------------------------- CATEGORY ---------------------------------------------

	public function getCategoryList(){
		$data['data'] = $this->CategoryAdmin->getCategory();
		$this->load->view('admin/category/listCategory',$data);
	}
	public function addCategory(){
		$this->form_validation->set_rules('categoryname', 'categoryname', 'required');
		if ($this->form_validation->run() != FALSE){
			$categoryName = $this->input->post("categoryname");
			$this->debug->debug($categoryName);
			$data = array(
				"nama" => $categoryName
			  );
			  $this->CategoryAdmin->insertCategory($data);

			  $this->clear_field_data();
		  }
		  $this->load->view('admin/category/addCategory');
	}

	public function editCategory(){
		$id =$this->input->post('id');
		$this->debug->debug($id);
		$data['data'] = $this->CategoryAdmin->getCategoryById($id);
		$this->form_validation->set_rules('categoryname', 'categoryname', 'required');
		if ($this->form_validation->run() != FALSE){
			$id =$this->input->post('id');
			$categoryName = $this->input->post("categoryname");
			$dataUpdated = array(
				"nama" => $categoryName
			);
			$this->CategoryAdmin->editCategory($id,$dataUpdated);

			$this->clear_field_data();
			redirect("adminweb/category");
		}
		$this->load->view('admin/category/editCategory',$data);
	}
	public function deleteCategory(){
		$id =$this->input->post('id');

		if($id != NULL){
			echo "<script type='text/javascript'> if(confirm('Are You Sure Want To Delete This Data ? ')){
				".$this->CategoryAdmin->deleteCategory($id)." console.log('NOT OKE');
			}
			else{
				console.log('NOT OKE');
			} </script>";
		}
		redirect('adminweb/category');
	}

	//----------------------------------------- Produk ---------------------------------------------

	public function getProductList(){
		$data['data'] = $this->ProductAdmin->getProduct();
		$this->load->view('admin/product/listProduct',$data);
	}

	public function addProduct(){
		$this->form_validation->set_rules('productName', 'productName', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('stock', 'stock', 'required');
		$this->form_validation->set_rules('product_desc', 'product_desc', 'required');

		if ($this->form_validation->run() != FALSE){
			$productName = $this->input->post("productName");
			$price = $this->input->post("price");
			$category = $this->input->post("category");
			$discount = $this->input->post("discount");
			$product_desc = $this->input->post("product_desc");
			$stock = $this->input->post("stock");
			$url_photo = $this->_uploadImage($productName,$this->upload_path);

			$data = array(
				"nama_produk" => $productName ,
				"harga_produk" => $price ,
				"id_kategori" => $category ,
				"discount" => $discount ,
				"stock" => $stock,
				"produk_desk" => $product_desc ,
				'url_produk' => $url_photo
			  );
			  $this->ProductAdmin->insertProduct($data);

			  $this->clear_field_data();
		  }
		  $dataCategory['dataCategory'] = $this->CategoryAdmin->getCategory();
		  $this->load->view('admin/product/addProduct',$dataCategory);
		  if ($this->form_validation->run() != FALSE){
			echo "<script type='text/javascript'>
				alert('Data Has been Saved');
			</script>";
		  }
	}
	public function editProduct(){
		$id =$this->input->post('id');
		$data['data'] = $this->ProductAdmin->getProductById($id);
		$this->form_validation->set_rules('productName', 'productName', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('stock', 'stock', 'required');
		$this->form_validation->set_rules('product_desc', 'product_desc', 'required');
		if ($this->form_validation->run() != FALSE){
			$id =$this->input->post('id');
			$productName = $this->input->post("productName");
			$price = $this->input->post("price");
			$product_desc = $this->input->post("product_desc");
			$discount = $this->input->post("discount");
			$category = $this->input->post("category");
			$stock = $this->input->post("stock");
			if(!empty($_FILES["image"]["name"])){
				$this->debug->debug("masuk image");
				$url_photo = $this->_uploadImage($productName,$this->upload_path);
			}
			else{
				$this->debug->debug("tidak masuk image");
				$url_photo = $this->input->post("url_photo");
			}
			$this->debug->debug($url_photo);
			$dataUpdated = array(
				"nama_produk" => $productName ,
				"harga_produk" => $price ,
				"produk_desk" => $product_desc ,
				"discount" => $discount ,
				"id_kategori" => $category ,
				"stock" => $stock,
				'url_produk' => $url_photo
			  );
			  $this->ProductAdmin->editProduct($id,$dataUpdated);

			$this->clear_field_data();
			redirect("adminweb/product");
		}
		$data['data'] = $this->ProductAdmin->getProductById($id);
		$data['dataCategory'] = $this->CategoryAdmin->getCategory();
		$this->load->view('admin/product/editProduct',$data);

	}

	public function deleteProduct(){
		$id =$this->input->post('id');

		if($id != NULL){
			echo "<script type='text/javascript'> if(confirm('Are You Sure Want To Delete This Data ? ')){
				".$this->ProductAdmin->deleteProduct($id)." console.log('NOT OKE');
			}
			else{
				console.log('NOT OKE');
			} </script>";
		}
		redirect('adminweb/product');
	}

}