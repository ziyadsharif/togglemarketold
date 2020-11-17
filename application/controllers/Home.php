<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
     	parent::__construct();
     	$this->load->helper('url');
		$this->load->library('session');
    }
	
	public function index()
	{
		$data["Title"]="Welcome To Toggle Market";
		$this->load->view('togglehospitality',$data);
	}
	
	public function productsearch()
	{
		$data["Title"]="ToggleMarket Products";
		$this->load->view('productsearch',$data);
	}

	public function productdetails()
	{
		$this->load->model('ServiceCall');
		$productId = isset($_GET['productid'])?$_GET['productid']:null;
		
		if(isset($productId)){
			$productData=$this->ServiceCall->getproduct($productId);
			$decodedproductData = json_decode($productData, true);
			$product['product'] = $decodedproductData['data'][0]['product'];
			$this->load->view('productdetails',$product);
		}
		else{
			$this->load->view('productsearch');
		}
	}

	public function catalogue()
	{
		$this->load->view('catalogue');
	}
}
