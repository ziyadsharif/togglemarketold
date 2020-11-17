<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authenticate extends CI_Controller
{

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
	public function adduser()
	{
		$json = file_get_contents('php://input');
		$obj = json_decode($json);

		$this->load->model('usermodel');

		$Companydata["Name"] = $obj->{"CompanyName"};
		$Companydata["Address"] = $obj->{"CompanyAddress"};
		$Companydata["City"] = $obj->{"CompanyCity"};
		$Companydata["CountryId"] = $obj->{"CompanyCountry"};
		$Companydata["NatureOfBusiness"] = $obj->{"NatureOfBusiness"};
		$Companydata["AccountType"] = $obj->{"Type"};
		$Companydata["IsActive"] = "0";
		$Companydata["CreationDate"] = date("Y-m-d H:i:s");


		$CompanyId = $this->usermodel->regsiterCompany($Companydata);
		$BranchData["CompanyId"] = $CompanyId;
		$BranchData["BranchName"] = $obj->{"CompanyBranchName"};
		$BranchData["Address"] = $obj->{"CompanyAddress"};
		$BranchData["City"] = $obj->{"CompanyCity"};
		$BranchData["CountryId"] = $obj->{"CompanyCountry"};
		$BranchData["IsActive"] = "0";


		if ($obj->{"CompanyBranchType"} == "HO") $BranchData["IsHeadOffice"] = "1";
		else $BranchData["IsHeadOffice"] = "0";

		$BranchId = $this->usermodel->regsiterCompanyBranch($BranchData);

		$UserData["BranchId"] = $BranchId;
		$UserData["Email"] = $obj->{"Email"};
		//$UserData["Password"]='AES_ENCRYPT("'.$obj->{"Password"}.'","g5LWLvCUCxd97uq3gin3hJ6f5Phsq6cy")';
		$UserData["CreationDate"] = date("Y-m-d H:i:s");
		$UserData["BlackList"] = "0";
		$UserData["IsSuperAdmin"] = "0";
		$UserData["IsCompanyAdmin"] = "0";
		$UserData["AccountManager"] = "0";
		$UserData["SupplierRelationshipManager"] = "0";

		$UserData["IsActive"] = "0";

		$UserId = $this->usermodel->regsiterUser($UserData, $obj->{"Password"});

		$UserProfile["UserId"] = $UserId;
		$UserProfile["FullName"] = $obj->{"FullName"};
		$UserProfile["Designation"] = $obj->{"Designation"};
		$UserProfile["Gender"] = "";
		$UserProfile["MobileNumber"] = $obj->{"MobileNumber"};
		$UserProfile["Phone"] = "";
		$UserProfile["Address"] = $obj->{"CompanyAddress"};
		$UserProfile["City"] = $obj->{"CompanyCity"};
		$UserProfile["Country"] = $obj->{"CompanyCountry"};

		$this->usermodel->regsiterUserProfile($UserProfile);


		$resp["Success"] = true;
		$resp["BranchId"] = $BranchId;
		echo json_encode($resp);
	}

	public function authenticateuser()
	{
		$json = file_get_contents('php://input');
		$obj = json_decode($json);

		$this->load->model('usermodel');
		$userDetails = $this->usermodel->getuserDetails($obj->{"Email"}, $obj->{"Password"});
		if (!$userDetails["Success"]) {
			$userDetails["Message"] = "Login failed please try again!";
			echo json_encode($userDetails);
			return;
		}

		if ($userDetails["IsActive"] == "0") {
			$userDetails["Success"] = false;
			$userDetails["Message"] = "Your account is not active please contact support!";
			echo json_encode($userDetails);
			return;
		}

		$checkCompanyActive = $this->usermodel->checkCompanyActive($userDetails["BranchId"]);

		$userDetails["CompanyDetails"] = $checkCompanyActive;
		if ($checkCompanyActive["BranchStatus"] == "0" || $checkCompanyActive["CompanyStatus"] == "0") {
			$userDetails["Success"] = false;
			$userDetails["Message"] = "Your account is not active please contact support!";
			echo json_encode($userDetails);
			return;
		}

		if ($userDetails["BlackList"] == "1") {
			$userDetails["Success"] = false;
			$userDetails["Message"] = "Your account is not active please contact support!";
			echo json_encode($userDetails);
			return;
		}
		$UserProfileInfo = $this->usermodel->getProfileDetails($userDetails["Id"]);
		$resp["Success"] = true;
		//session_destroy();
		session_start();

		$sessiondata = array(
			"UserId" => $userDetails["Id"],
			"BranchId" => $userDetails["BranchId"],
			"Email" => $userDetails["Email"],
			"IsSuperAdmin" => $userDetails["IsSuperAdmin"],
			"IsCompanyAdmin" => $userDetails["IsCompanyAdmin"],
			"AccountManager" => $userDetails["AccountManager"],
			"SupplierRelationshipManager" => $userDetails["SupplierRelationshipManager"],
			"IsActive" => $userDetails["IsActive"],
			"DistributorId" => $userDetails["DistributorId"],
			"BranchName" => $checkCompanyActive["BranchName"],
			"BranchStatus" => $checkCompanyActive["BranchStatus"],
			"BranchId" => $checkCompanyActive["BranchId"],
			"BranchCountry" => $checkCompanyActive["BranchCountry"],
			"CompanyId" => $checkCompanyActive["CompanyId"],
			"CompanyName" => $checkCompanyActive["CompanyName"],
			"CompanyCountry" => $checkCompanyActive["CompanyCountry"],
			"AccountType" => $checkCompanyActive["AccountType"],
			"CompanyStatus" => $checkCompanyActive["CompanyStatus"],
			'logged_in' => TRUE,
			"FullName" => $UserProfileInfo["FullName"],
			"ProfilePicture" => $UserProfileInfo["ProfilePicture"]
		);

		$this->session->set_userdata($sessiondata);

		echo json_encode($userDetails);
	}

	public function signin()
	{
		//$data["Title"]="Welcome To Toggle Market";
		//session_destroy();
		$this->load->view('login');
	}

	public function signup()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->model('commonFunctions');
		$this->load->view('signup', $data);
	}

	public function resetpassword()
	{
		$this->load->view('resetpassword');
	}

	public function accountdetails()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->view('accountDetails', $data);
	}

	public function accountsecurity()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->view('accountSecurity', $data);
	}
	public function accountverification()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->view('accountVerification', $data);
	}
	public function accountsettings()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->view('accountSettings', $data);
	}

	public function logout()
	{
		session_start();
		//session_destroy();
		header("Location:/");
	}

	public function workStation()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->model('commonFunctions');
		$this->load->view('workStation', $data);
	}

	public function addProject()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->model('commonFunctions');
		$this->load->view('addProject', $data);
	}
	
	public function login()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->model('commonFunctions');
		$this->load->view('login', $data);
	}

	public function createEvent()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->model('commonFunctions');
		$this->load->view('workStation', $data);
	}

	public function buyerDashboard()
	{
		$data["Title"] = "Welcome To Toggle Market";
		$this->load->model('commonFunctions');
		$this->load->view('buyerDashboard', $data);
	}

}
