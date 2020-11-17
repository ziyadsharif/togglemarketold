<?php

require_once(APPPATH . 'networking/Api/Api.php');

defined('BASEPATH') or exit('No direct script access allowed');

include_once(APPPATH . 'controllers/ServicesController/ServiceCall.php');

class ServiceModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->library('session');

        $this->api = new Api();
    }

    public function API($method, $url, $data, $authentication)
    {
        $get_response = $this->api->callAPI($method, $url, $data, $authentication);
        return $get_response;
    }
}
