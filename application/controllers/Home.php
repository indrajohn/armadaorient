<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		require_once("phpDebug.php");
		$this->debug= new PHPDebug();
		$this->load->library('form_validation');
		$this->load->model('admin/ProductAdmin');
		$this->load->model('admin/CategoryAdmin');

		$this->load->model('User');
	 }

	public function index()
	{
		$data['data'] = $this->ProductAdmin->getProduct();
		$this->load->view('home',$data);
	}
	public static function rupiah($angka){
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		return $hasil_rupiah;
	}
	public function blog_details()
	{
		$this->load->view('blog-details');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function checkout()
	{
		$this->load->view('checkout');
	}
	public function contact()
	{
		$this->load->view('contact');
		//$this->sendMail();
	}
	
	public function sendMail()
	{
		
		$this->load->library('email');
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);
		$this->email->from('indrajohn2@gmail.com', 'Your Name');
		$this->email->to('indrajohn2@gmail.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

	}
	
	public function about_us()
	{
		$this->load->view('about-us');
	}
	public function product_details()
	{
		$id = $this->input->get('product_id');
		$data['data'] = $this->ProductAdmin->getProductById($id);
		$this->load->view('product-details',$data);
	}
	public function product_grid()
	{
		$data['data_kategori'] = $this->CategoryAdmin->getCategory();
		$id = $this->input->get('category_id');
		$active =$this->input->get('no');

		if(!isset($id)){
			$id = 1;
			$active = 1;
		}
		$from = ($active * 6) - 6;
		$to = $from + 6;
		$data['data_produk'] = $this->ProductAdmin->getSearchByCategory($id,$from,$to);
		$countAllProduct = 
		$data['active'] = $active;
		$data['id_kategori'] = $id;
		$data['count'] = (sizeof($data['data_produk']) / 6) <= 1 ? 1 : (sizeof($data['data_produk']) / 6);
		$this->debug->debug(sizeof($data['data_produk']));
	//	$data['count'] = (44 / 10) <= 1 ? 1 : (44 / 10);
		$this->load->view('product-grid',$data);
	}
	public function wishlist()
	{
		$this->load->view('wishlist');
	}
	public function login(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->debug->debug($username);
			if($this->User->can_login($username,$password)){
				$cookie= array(

					'name'   => 'username',
					'value'  => $username,
					'expire' => '30000',
					'secure' => false

				);
				$this->input->set_cookie($cookie);
				redirect($this->User->is_admin($username,$password) ? base_url() . 'adminweb/dashboard' : base_url() . 'home');
			}
			else{

				$this->debug->debug('Invalid Username and Password');
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect(base_url() . 'home/login');
			}
		}
		$this->load->view('admin/login');
	}




}
