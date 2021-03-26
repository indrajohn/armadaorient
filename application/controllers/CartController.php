<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {
	public $debug;

	function __construct() {
		parent::__construct();
		require_once("phpDebug.php");
		$this->debug= new PHPDebug();
		$this->load->model('Cart');
		$this->load->model('User');
	 }
    public function checkProduct(){
		$username= $this->input->cookie('username', true);
		$data['dataCart'] = $this->Cart->getCart($username);
		$this->debug->debug($username);
		$this->load->view('toolbar',$data);
	}

	public function cart()
	{
		$username= $this->input->cookie('username', true);
		if($username == ''){
			redirect('login');
		}
		else{
			$this->debug->debug($username);
			$data['dataCart'] = $this->Cart->getCart($username);
			$this->load->view('cart',$data);
		}
	}

	public function deleteCartByID(){
		$username= $this->input->cookie('username');
		$this->debug->debug($username);
		
		if($username == ''){
			redirect('login');
		}
		else{
			$id =$this->input->post('product_id');
			$this->Cart->deleteCartByID($username,$id);
			redirect('cart');
		}
	}

	public function updateTotalProduct(){
		$username= $this->input->cookie('username');
		$this->debug->debug($username);
		
		if($username == ''){
			redirect('login');
		}
		else{
			$id =$this->input->post('product_id');
			$total_product =$this->input->post('product_total');
			$this->debug->debug($id);
			$this->debug->debug($total_product);
			$this->Cart->updateTotalProduct($username,$id);
			redirect('cart');
		}
	}
	public function addCart(){
		$username= $this->input->cookie('username');
		$user = $this->User->getUserIdByUsername($username);
		
		if($username == ''){
			redirect('login');
		}
		else{
			$id =$this->input->post('product_id');
			$isInCart = $this->Cart->getCountCart($username,$id);
			$this->debug->debug($isInCart);
			if($isInCart == 0){
				$data = array(
					"user_id" => $user->id ,
					"product_id" => $id ,
					"product_total" => '1'
				);
				$this->Cart->addCart($data);
			}
			else{
				 $total_product = $this->Cart->getTotalProduct($username,$id);
				 $total_product++;
				 $this->debug->debug($total_product);
				 $this->Cart->updateTotalProduct($username,$id,$total_product);
			}
			redirect('cart');
		}
	}
	

}
