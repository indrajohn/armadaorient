<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WishlistController extends CI_Controller {
	public $debug;
	public $username;
	function __construct() {
		parent::__construct();
		require_once("phpDebug.php");
		$this->debug= new PHPDebug();
		$this->load->library('form_validation');

		$this->load->model('Wishlist');
	 }
    public function index()
	{
        $username= $this->input->cookie('username', true);
		if($username == ''){
			redirect('login');
		}
		else{
			$this->debug->debug($username);
			$data['dataWishlist'] = $this->Wishlist->getWishlist($username);
			$this->load->view('wishlist',$data);
		}
    }

	public function deleteWishList(){
		$this->debug->debug($username);
		$data['dataWishlist'] = $this->Wishlist->getWishlist($username);
		$this->load->view('wishlist',$data);
	}
}
