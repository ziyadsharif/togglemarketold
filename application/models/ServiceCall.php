<?php

use PHPGson\Gson;

defined('BASEPATH') or exit('No direct script access allowed');
// $base_url = load_class('Config')->config['base_url'];
// $t = APPPATH .  str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php'
require_once(APPPATH .'networking/wrapper/User/CreateUser/Request/CreateUser.php');

require_once(APPPATH .'networking/wrapper/User/CreateUser/Response/createdUsers.php');
require_once(APPPATH . 'networking/wrapper/SendEmail/Request/SendEmailRequest.php');
require_once(APPPATH . 'networking/wrapper/SendEmail/Response/SendEmailResponse.php');
require_once(APPPATH . 'networking/constant/Constant.php');
require_once(APPPATH . 'networking/url/URL.php');
require_once(APPPATH . 'networking/Api/Api.php');
require_once(APPPATH . 'libraries/php-gson-master/src/PHPGson/Gson.php');
require_once(APPPATH . 'libraries/php-gson-master/src/PHPGson/Extractor.php');
require_once(APPPATH . 'libraries/php-gson-master/src/PHPGson/Hydrator.php');

class ServiceCall extends CI_Model
{
    private $createUser;
    private $constant;
    private $api;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->sendemailrequest = new SendEmailRequest();
        $this->constant = new Constant();
        $this->url = new URL();
        $this->api = new Api();
        $this->gson = new Gson();
    }

    

    public function getproducts(){
        try {
            /*$data = json_encode(array(
                $this->constant->pageNumber => "1",
                $this->constant->pageLimit => "50"
                //$this->constant->filter => '{IsActive:["0"]}'
            ));*/
            $pageNum = isset($_POST['pageNum'])?$_POST['pageNum']:null;
            $pageUrl = isset($_POST['pageUrl'])?$_POST['pageUrl']:null;
            if($pageUrl != "" && $pageUrl != $pageNum){
                $pageNum = $pageUrl;
            }

            $json = '{"pageNumber": "'.$pageNum.'","pageLimit": "20","filter": {"IsActive": ["0"]}}';

            $jsonData = json_decode($json, true);

            $get_data = $this->api->callAPI($this->url->POST, $this->url->getproducts, json_encode($jsonData),true);
            $productsdata = json_decode($get_data, true);
            //$products = $productsdata['data'];
            $products = $productsdata;
            //$encoded_products = json_encode($products);
            echo json_encode($products);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getproduct($productId){
        try {
            //$productId = isset($_POST['productId'])?$_POST['productId']:null;
            $json = '{"pageNumber": "1","pageLimit": "1","filter": {"IsActive": ["0"],"ProductId": ["'.$productId.'"]}}';
            $jsonData = json_decode($json, true);
            $get_data = $this->api->callAPI($this->url->POST, $this->url->getproducts, json_encode($jsonData),false);
            $productdata = json_decode($get_data[1], true);
            return json_encode($productdata);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function generatePagination(){
        try {
            $productsNum = isset($_POST['productsNum'])?$_POST['productsNum']:null;
            $pagelimit = isset($_POST['pagelimit'])?$_POST['pagelimit']:null;
            $pageNum = isset($_POST['pageNum'])?$_POST['pageNum']:null;
            $pageUrl = isset($_POST['pageUrl'])?$_POST['pageUrl']:null;

            if($pageUrl != "" && $pageUrl != $pageNum){
                $pageNum = $pageUrl;
            }

            $this->load->model('Catalogue');
            $result=$this->Catalogue->pagination($productsNum, $pagelimit, $pageNum);
            echo json_encode($result);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getallproducts(){
        try {
            $get_data = $this->api->callAPI($this->url->GET, $this->url->getallproducts, "",true);
            echo json_encode($get_data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getproductsbypage(){
        try {
            $pageNum = isset($_POST['pageNum'])?$_POST['pageNum']:null;
            $url = $this->url->getproductsbypage.$pageNum;
            $get_data = $this->api->callAPI($this->url->GET, $url, "","");
            echo json_encode($get_data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getproductbyproductid(){
        try {
            $product_id = $this->uri->segment(3, 0);
            $url = $this->url->getproductbyproductid.$product_id;
            $get_data = $this->api->callAPI($this->url->GET, $url, "","");
            return json_encode($get_data);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getproductscount(){
        try {
            $page = isset($_REQUEST['page'])?$_REQUEST['page']:null;
            $this->load->model('Catalogue');
            $get_data = $this->api->callAPI($this->url->GET, $this->url->getproductscount, "","");
            $result=$this->Catalogue->pagination($get_data, "","");
            echo json_encode($result);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
