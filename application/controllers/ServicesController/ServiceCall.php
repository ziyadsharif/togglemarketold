<?php

use PHPGson\Gson;
use CreateUser\CreateUser;
use CreateUser\CompanyDetails;
use CreateUser\UserDetails;
use LoginUser\LoginUser;
use LoginUserResponse\LoginUserResponse;
use AccountDetails\AccountDetailsPersonalInfo;
use AccountDetails\AccountDetailsContactInfo;
use AccountDetails\AccountDetailsCompanyInfo;
use ChangePassword\ChangePassword;
use StatusCodes\StatusCodes;
use AddProject\AddProject;
use AddProject\ProjectArea;
use AddProject\ProjectInterest;
use AddProject\ProjectImagesPath;
use CreateEvent\CreateAnEvent;
use GetProjectDetail\ProjectDetails;
use ForgotPassword\ForgotPassword;
use AddAreaTypeRequest\AddAreaTypeRequest;
/*use GetProjectResponse\GetProjectResponse;
use GetProjectResponse\GetBuyer;
use GetProjectResponse\ProjectArea;
use GetProjectResponse\Reuquest; */

defined('BASEPATH') or exit('No direct script access allowed');

include_once(APPPATH . 'networking/wrapper/User/Login/Request/LoginUser.php');
include_once(APPPATH . 'networking/wrapper/User/Login/Response/LoginUserResponse.php');
include_once(APPPATH . 'networking/wrapper/User/AccountDetailsPersonalInfo/Request/AccountDetailsPersonalInfo.php');
include_once(APPPATH . 'networking/wrapper/User/CreateUser/Request/CreateUser.php');
require_once(APPPATH . 'networking/wrapper/User/CreateUser/Response/createdUsers.php');
require_once(APPPATH . 'networking/wrapper/User/ChangePassword/Request/ChangePassword.php');
require_once(APPPATH . 'networking/wrapper/SendEmail/Request/SendEmailRequest.php');
require_once(APPPATH . 'networking/wrapper/SendEmail/Response/SendEmailResponse.php');
require_once(APPPATH . 'networking/wrapper/Countries/Response/GetCountries.php');
require_once(APPPATH . 'networking/wrapper/User/ForgotPassword/Request/ForgotPassword.php');
require_once(APPPATH . 'networking/wrapper/SendEmail/Request/SendEmailRequest.php');
require_once(APPPATH . 'networking/wrapper/SendEmail/Response/SendEmailResponse.php');
require_once(APPPATH . 'networking/wrapper/Countries/Response/GetCountries.php');
require_once(APPPATH . 'networking/wrapper/Project/GetProject/Response/GetProjectResponse.php');
require_once(APPPATH . 'networking/wrapper/Project/GetProject/Response/GetProjectResponse.php');
require_once(APPPATH . 'networking/wrapper/Project/AddAreaType/Request/AddAreaTypeRequest.php');
require_once(APPPATH . 'networking/constant/Constant.php');
require_once(APPPATH . 'networking/constant/StatusCodes.php');
require_once(APPPATH . 'networking/url/URL.php');
require_once(APPPATH . 'networking/Api/Api.php');
require_once(APPPATH . 'libraries/php-gson-master/src/PHPGson/Gson.php');
require_once(APPPATH . 'libraries/php-gson-master/src/PHPGson/Extractor.php');
require_once(APPPATH . 'libraries/php-gson-master/src/PHPGson/Hydrator.php');
require_once(APPPATH . 'networking/wrapper/Project/AddProject.php');
require_once(APPPATH . 'networking/wrapper/Event/CreateEvent/CreateEvent.php');
require_once(APPPATH . 'networking/wrapper/Project/GetProjectDetails.php');

class ServiceCall extends CI_Controller
{
    private $loginUser;
    private $loginUserResponse;
    private $accountdetailspersonalInformation;
    private $accountdetailscontactInformation;
    private $accountdetailscompanyInformation;
    private $changepassword;
    private $forgotpassword;
    private $createUser;
    private $userDetails;
    private $companyDetails;
    private $addareatype;
    //private $getprojectsResponse;
    private $constant;
    private $statuscodes;
    private $api;
    private $token;
    private $AddProject;
    private $ProjectArea;
    private $CreateEvent;
    private $ProjectInterest;
    private $ProjectImagesPath;
    private $ProjectDetails;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        $this->loginUser = new LoginUser();
        $this->loginUserResponse = new LoginUserResponse();
        $this->accountdetailspersonalInformation = new AccountDetailsPersonalInfo();
        $this->accountdetailscontactInformation = new AccountDetailsContactInfo();
        $this->accountdetailscompanyInformation = new AccountDetailsCompanyInfo();
        $this->createUser = new CreateUser();
        $this->changepassword = new ChangePassword();
        $this->userDetails = new UserDetails();
        $this->companyDetails = new CompanyDetails();
        $this->sendemailrequest = new SendEmailRequest();
        $this->addareatype = new AddAreaTypeRequest();
        $this->forgotpassword = new ForgotPassword();
        $this->userDetails = new UserDetails();
        $this->sendemailrequest = new SendEmailRequest();
        // $this->getprojectsResponse = new GetProjectResponse();
        // $this->getprojectsResponse = new GetBuyer();
        // $this->getprojectsResponse = new ProjectArea();
        // $this->getprojectsResponse = new Reuquest();
        $this->constant = new Constant();
        $this->statuscodes = new StatusCodes();
        $this->url = new URL();
        $this->api = new Api();
        $this->gson = new Gson();
        $this->AddProject = new AddProject();
        $this->ProjectArea = new ProjectArea();
        $this->ProjectInterest = new ProjectInterest();
        $this->ProjectImagesPath = new ProjectImagesPath();
        $this->CreateEvent = new CreateAnEvent();
        $this->ProjectDetails = new ProjectDetails();

        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function createuserAPI()
    {

        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $email = $obj->{"Email"};
        $username = $obj->{"Email"};
        $password = $obj->{"Password"};
        $nationality = "xyz"; //$obj->{"FullName"};
        $dob = "2002-12-09"; //$obj->{"FullName"};
        $mobilenumber = $obj->{"MobileNumber"};
        $companyname = $obj->{"CompanyName"};
        $companyaddress = $obj->{"CompanyAddress"};
        $designation = $obj->{"Designation"};
        $natureofbusiness = $obj->{"NatureOfBusiness"};
        $username = $obj->{"Email"};
        $password = $obj->{"Password"};
        $firstname = $obj->{"FirstName"};
        $lastname = $obj->{"LastName"};
        $extension = $obj->{"Extension"};
        $city = $obj->{"CompanyCity"};
        $country = $obj->{"CompanyCountry"};
        $type_id = $obj->{"CompanyBranchType"};

        $this->createUser->setUserName($username);
        $this->createUser->setPassword($password);

        //$this->userDetails->setFullName($fullname);
        $this->userDetails->setFirstName($firstname);
        $this->userDetails->setLastName($lastname);
        $this->userDetails->setNationality($nationality);
        $this->userDetails->setDob($dob);
        $this->userDetails->setEmail($email);
        $this->userDetails->setMobileNumber($mobilenumber);
        $this->userDetails->setExtension($extension);

        $this->companyDetails->setCompanyName($companyname);
        $this->companyDetails->setCompanyAddress($companyaddress);
        $this->companyDetails->setDesignation($designation);
        $this->companyDetails->setNatureOfBusiness($natureofbusiness);
        $this->companyDetails->setCity($city);
        $this->companyDetails->setCountry($country);
        $this->companyDetails->setType_id($type_id);

        $data = json_encode(array(
            $this->constant->CreationDateAccountDetailsPersonalInfoKey => "",
            $this->constant->UserNameAccountDetailsPersonalInfoKey => $this->createUser->getUserName(),
            $this->constant->PasswordNameAccountDetailsPersonalInfoKey => $this->createUser->getPassword(),

            $this->constant->AccountDetailsPersonalInfoKey => array(
                $this->constant->FirstNameAccountDetailsPersonalInfoKey => $this->userDetails->getFirstName(),
                $this->constant->LastNameAccountDetailsPersonalInfoKey => $this->userDetails->getLastName(),
                $this->constant->NationalityAccountDetailsPersonalInfoKey => $this->userDetails->getNationality(),
                $this->constant->DOBAccountDetailsPersonalInfoKey => $this->userDetails->getDob(),
            ),
            $this->constant->AccountDetailsContactInfoKey => array(
                $this->constant->EmailAccountDetailsContactInfoKey => $this->userDetails->getEmail(),
                $this->constant->MobileNumberAccountDetailsContactInfoKey => $this->userDetails->getMobileNumber(),
                $this->constant->ExtensionAccountDetailsContactInfoKey => $this->userDetails->getExtension(),
            ),
            $this->constant->AccountDetailsCompanyDetailsKey => array(
                $this->constant->CompanyDetailsCompanyNameKey => $this->companyDetails->getCompanyName(),
                $this->constant->CompanyDetailsCompanyAddressKey => $this->companyDetails->getCompanyAddress(),
                $this->constant->CompanyDetailsNatureOfBusinessKey => $this->companyDetails->getNatureOfBusiness(),
                $this->constant->CompanyDetailsCompanyCityKey => $this->companyDetails->getCity(),
                $this->constant->CompanyDetailsCompanyCountryKey => $this->companyDetails->getCountry(),
                $this->constant->CompanyDetailsCompanyTypeIdKey => $this->companyDetails->getType_id(),
                $this->constant->CompanyDetailsCompanyDesignationKey => $this->companyDetails->getDesignation(),
            ),
        ));

        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->POST, $this->url->createuserURL, $data, false);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
            } else {
                echo json_encode($get_response[0]);
                return;
            }
            /*  $createdUsers = new createdUser();
            $response = \PHPGson\Gson::fromJson(
                $createdUsers,
                $get_response
            );
            $createdUsers->getSuccess();
            $createdUsers->getMessage(); */
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function loginAPI()
    {

        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $email = $obj->{"LoginEmail"};
        $password = $obj->{"LoginPassword"};

        $this->loginUser->setEmail($email);
        $this->loginUser->setPassword($password);

        $data = json_encode(array(
            $this->constant->LoginUserNameKey => $this->loginUser->getEmail(),
            $this->constant->LoginPasswordKey => $this->loginUser->getPassword(),
        ));

        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->POST, $this->url->loginURL, $data, false);

            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
                try {
                    $loginUserResponse = new LoginUserResponse();
                    $response = \PHPGson\Gson::fromJson(
                        $loginUserResponse,
                        $get_response[1]
                    );
                    $loginUserResponse->getSuccess();
                    $loginUserResponse->getStatus();
                    $this->Token = $loginUserResponse->getToken();
                    $token = $this->Token;
                    $userid =  json_decode($get_response[1])->data->personalInfo->id;
                    $firstname = json_decode($get_response[1])->data->personalInfo->firstName;
                    $lastname = json_decode($get_response[1])->data->personalInfo->lastName;
                    try {
                        $companyid = json_decode($get_response[1])->data->companyDetails[0]->id;
                    } catch (Exception $ex) {
                        echo $ex->getMessage();
                    }
                    $fullname = $firstname . $lastname;
                    $_SESSION["token"] = $token;
                    $_SESSION["userid"] = $userid;
                    $_SESSION["fullname"] = $fullname;
                    $_SESSION["companyid"] = $companyid;
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }
            } else {
                $response = $get_response[1] == 'Unauthorized' ? $get_response[1] : json_decode($get_response[1])->message;
                echo json_encode($response);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function saveemailid()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $this->getuserAPI("");
        $userid = $obj->{"UserId"};

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["userid"] = $userid;
        echo (1);
    }

    public function saveprojectid()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $projectid = $obj->{"ProjectId"};
        $_SESSION["projectid"] = $projectid;
        echo (1);
    }

    public function forgotpasswordAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        if (!isset($_SESSION)) {
            session_start();
        }
        $userid = $_SESSION["userid"];
        $userid = $userid;
        $newpassword = $obj->{"NewPassword"};

        $this->forgotpassword->setUserId($userid);
        $this->forgotpassword->setNewPassword($newpassword);

        $data = json_encode(array(
            $this->constant->ResetPasswordUserId => $this->forgotpassword->getUserId(),
            $this->constant->ResetPasswordNewPassword => $this->forgotpassword->getNewPassword(),
        ));

        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->POST, $this->url->forgotpasswordURL, $data, false);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function changepasswordAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $currentpassword = $obj->{"CurrentPassword"};
        $newpassword = $obj->{"NewPassword"};

        $this->changepassword->setCurrentPassword($currentpassword);
        $this->changepassword->setNewPassword($newpassword);

        $data = json_encode(array(
            $this->constant->OldPasswordKey => $this->changepassword->getCurrentPassword(),
            $this->constant->NewPasswordKey => $this->changepassword->getnewPassword(),
        ));

        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->POST, $this->url->changepasswordURL, $data, true);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function saveaccountdetailsAPI()
    {

        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $firstname = $obj->{"FirstNameAccountDetails"};
        $lastname = $obj->{"LastNameAccountDetails"};
        $dob = $obj->{"DOBAccountDetails"};
        $nationality = $obj->{"NationalityAccountDetails"};

        $this->accountdetailspersonalInformation->setFirstName($firstname);
        $this->accountdetailspersonalInformation->setLastName($lastname);
        $this->accountdetailspersonalInformation->setDOB($dob);
        $this->accountdetailspersonalInformation->setNationality($nationality);

        $data = json_encode(array(
            $this->constant->AccountDetailsPersonalInfoKey => array(
                $this->constant->FirstNameAccountDetailsPersonalInfoKey => $this->accountdetailspersonalInformation->getFirstName(),
                $this->constant->LastNameAccountDetailsPersonalInfoKey => $this->accountdetailspersonalInformation->getLastName(),
                $this->constant->NationalityAccountDetailsPersonalInfoKey => $this->accountdetailspersonalInformation->getNationality(),
                $this->constant->DOBAccountDetailsPersonalInfoKey => $this->accountdetailspersonalInformation->getDOB(),
            )
        ));

        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->PUT, $this->url->updatepersonalinfoURL, $data, true);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function savecontactinformationaccountdetailsAPI()
    {

        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $email = $obj->{"EmailAccountDetails"};
        $mobilenumber = $obj->{"MobileNumberAccountDetails"};

        $this->accountdetailscontactInformation->setEmail($email);
        $this->accountdetailscontactInformation->setMobileNumber($mobilenumber);

        $data = json_encode(array(
            $this->constant->AccountDetailsContactInfoKey => array(
                $this->constant->EmailAccountDetailsContactInfoKey => $this->accountdetailscontactInformation->getEmail(),
                $this->constant->LastNameAccountDetailsPersonalInfoKey => $this->accountdetailscontactInformation->getMobileNumber(),
            )
        ));

        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->PUT, $this->url->updatecontactinfoURL, $data, true);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function savecompanyinfoaccountdetailsAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $companyinfocompanyname = $obj->{"CompanyName"};
        $companyinfocompanyaddressaddress = $obj->{"CompanyAddress"};
        $companyinfocompanycity = $obj->{"CompanyCity"};
        $companyinfocompanycountry = $obj->{"CompanyCountry"};
        $companyinfocompanyBranchTypeId = $obj->{"CompanyBranchTypeId"};
        $companyinfoDesignation = $obj->{"Designation"};

        $this->accountdetailscompanyInformation->setName($companyinfocompanyname);
        $this->accountdetailscompanyInformation->setAddress($companyinfocompanyaddressaddress);
        $this->accountdetailscompanyInformation->setCity($companyinfocompanycity);
        $this->accountdetailscompanyInformation->setCountry($companyinfocompanycountry);
        $this->accountdetailscompanyInformation->setType($companyinfocompanyBranchTypeId);
        $this->accountdetailscompanyInformation->setDesignation($companyinfoDesignation);

        $data = json_encode(array(
            $this->constant->AccountDetailsCompanyDetailsKey => array(
                $this->constant->CompanyDetailsCompanyNameKey => $this->accountdetailscompanyInformation->getName(),
                $this->constant->CompanyDetailsCompanyAddressKey => $this->accountdetailscompanyInformation->getAddress(),
                $this->constant->CompanyDetailsCompanyCityKey => $this->accountdetailscompanyInformation->getCity(),
                $this->constant->CompanyDetailsCompanyCountryKey => $this->accountdetailscompanyInformation->getCountry(),
                $this->constant->CompanyDetailsCompanyTypeIdKey => $this->accountdetailscompanyInformation->getType(),
                $this->constant->CompanyDetailsCompanyDesignationKey => $this->accountdetailscompanyInformation->getDesignation(),
            )
        ));

        $this->load->model('ServiceModel');
        $get_response = $this->ServiceModel->API($this->url->PUT, $this->url->updatecompanydetailsURL . $_SESSION["companyid"], $data, true);
        if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
            echo json_encode($get_response[0]);
        } else {
            echo json_encode($get_response[0]);
            return;
        }
    }

    public function getallusersAPI()
    {
        try {
            $this->load->model('ServiceModel');
            $get_data = $this->ServiceModel->API($this->url->GET, $this->url->getallusersURL, "", true);
            echo json_encode($get_data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    public function getuserAPI()
    {
        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getuserURL, "", true);

            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
                $response = json_decode($get_response[1]);
                //$getuserid = $response->getUser->id;
                $getcompanyId = $response->getUser->companyDetails[0]->company->id;
                //$_SESSION["userid"] = $getuserid;
                $_SESSION["companyid"] = $getcompanyId;
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getcompanydetails()
    {
        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getcompanydetailsURL . $_SESSION["companyid"], "", true);

            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
                /* $response = json_decode($get_response[1]);
                $getcompanyId = $response->getUser->companyDetails[0]->company->id;
                $_SESSION["companyid"] = $getcompanyId; */
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function sendemailAPI()
    {

        $json = file_get_contents('php://input');
        $obj = json_decode($json);

        $fullname = $obj->{"Fullname"};
        $email = $obj->{"Email"};
        $subject = $obj->{"Subject"};
        $body = $obj->{"Message"};
        $captcha = $obj->{"Captcha"};

        if (is_null($captcha)) {
            $captcha_error = 'Captcha is required';
        } else {
            $secret_key = '6LcUYtYZAAAAAAu3EPkZO_Dqpn3Bx3NZW69YOA9d';

            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $captcha);

            $response_data = json_decode($response);

            if (!$response_data->success) {
                $captcha_error = 'Captcha verification failed';
                $data = array(
                    'captcha_error'  => $captcha_error
                );
                echo json_encode($data);
                return;
            }
        }

        $this->sendemailrequest->setSubject($subject);
        $this->sendemailrequest->setEmail($email);
        $this->sendemailrequest->setBody($body);

        $data = json_encode(array(
            $this->constant->sendemailToKey => $this->sendemailrequest->getEmail(),
            $this->constant->sendemailSubjectKey => $this->sendemailrequest->getSubject(),
            $this->constant->sendemailBodyKey => $this->sendemailrequest->getBody()
        ));
        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->POST, $this->url->sendemailURL, $data, true);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_encode($get_response[0]);
            } else {
                echo json_encode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function GetUserDataCompanyDetails()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        //session_start();
        $_SESSION["CompanyName"] = $obj->{"CompanyName"};
        $_SESSION["CompanyAddress"] = $obj->{"CompanyAddress"};
        $_SESSION["CompanyCity"] = $obj->{"CompanyCity"};
        $_SESSION["CompanyCountry"] = $obj->{"CompanyCountry"};
        $_SESSION["CompanyBranchType"] = $obj->{"CompanyBranchType"};
        $_SESSION["Designation"] = $obj->{"Designation"};
        echo $_SESSION['CompanyName'];
        echo $_SESSION["CompanyAddress"];
        echo $_SESSION["CompanyCity"];
        echo $_SESSION["CompanyCountry"];
        echo $_SESSION["CompanyBranchType"];
        echo $_SESSION["Designation"];
    }

    public function getallproducts()
    {
        try {
            $this->load->model('ServiceModel');
            $get_data = $this->ServiceModel->API($this->url->GET, $this->url->getallproducts, "", true);
            echo json_encode($get_data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getproductsbypage()
    {
        try {
            $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : null;
            $url = $this->url->getproductsbypage . $pageNum;
            $this->load->model('ServiceModel');
            $get_data = $this->ServiceModel->API($this->url->GET, $url, "", true);
            echo json_encode($get_data);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getproductbyproductid()
    {
        try {
            $product_id = $this->uri->segment(3, 0);
            $url = $this->url->getproductbyproductid . $product_id;
            $this->load->model('ServiceModel');
            $get_data = $this->ServiceModel->API($this->url->GET, $url, "", true);
            return json_encode($get_data);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function getproductscount()
    {
        try {
            $this->load->model('Catalogue');
            $this->load->model('ServiceModel');
            $get_data = $this->ServiceModel->API($this->url->GET, $this->url->getproductscount, "", true);
            $result = $this->Catalogue->pagination($get_data, "");
            echo json_encode($result);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCountriesAPI()
    {
        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getcountriesURL, null, false);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                //echo json_decode($get_response[1]);
                echo json_decode(json_encode($get_response[1]), true);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
            //echo json_encode($countriesid);
            //$countryId
            /*   $createdUsers = new GetCountries();
            $response = \PHPGson\Gson::fromJson(
                $createdUsers,
                $get_response
            ); */
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getCititesAPI()
    {
        try {
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $CountryId = $obj->{"selectedCountryId"};

            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getcountriesURL . "/" . $CountryId, null, false);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getTypesAPI()
    {
        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->gettypeURL, null, false);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
            /*    $response = json_decode($get_response, true);
            $success = $response['success'];
            if (!$success) {
                echo json_encode($response);
            } else {
                echo $success;
                return;
            } */
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    public function getprojectsAPI()
    {
        try {
            $token = $_SESSION["token"];
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getallprojectsURL, null, true);
            $response = json_decode($get_response[1]);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
                /*  try {
                    $getprojectsResponse = new GetProjectResponse();
                    $response = \PHPGson\Gson::fromJson(
                        $getprojectsResponse,
                        $get_response[1]
                    );
                    $getprojectsResponse->getSuccess();
                    $getprojectsResponse->getCount();
                    $getprojectsResponse->getGetBuyer();
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                } */
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function AddProjectAreaAPI()
    {
        try {
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $projectId = $obj->{"ProjectId"};
            $areaName = $obj->{"AreaName"};
            $areatypeimagePath = $obj->{"AreaTypeImagePath"};

            $this->addareatype->setAreaName($areaName);
            $this->addareatype->setAreaPicture($areatypeimagePath);

            $data = json_encode(array(
                $this->constant->areanameKey => $this->addareatype->getAreaName(),
                $this->constant->areapictureKey => $this->addareatype->getAreaPicture(),
            ));


            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->POST, $this->url->addprojectURL($projectId), $data, true);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode($get_response[0]);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function addProjectAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $user = '';
        $this->getuserAPI("");
        $userid = $_SESSION["userid"];
        $projectName = $_POST['InputAddProjectProjectName'];
        $clientName = $_POST['InputAddProjectClientName'];
        $country = $_POST['InputAddProjectCountry'];
        $city = $_POST['InputAddProjectCityName'];
        $user__id = $userid;
        $rating = $_POST['rating'];
        $description = $_POST['InputAddProjectProjectDesc'];
        $rows = $_POST['hiddenRowNum'];

        $projectAreaData = array();
        $projectInterestData = array();
        $imagePathData = array();

        if (!empty($_POST['projectInterestArr'])) {
            foreach ($_POST['projectInterestArr'] as $check) {
                $this->ProjectInterest->setProjectInterest($check);
                ${"newArray$check"} = array("projectInterestId" => $this->constant->ProjectInterestIDKey = $this->ProjectInterest->getProjectInterest());
                array_push($projectInterestData, ${"newArray$check"});
            }
        }

        for ($x = 1; $x <= $rows; $x++) {
            $areaName_ = $budget_ = $areaType_id_ = '';

            $areaName_ = $_POST['InputAddProjectAreaName-' . $x];
            $budget_ = $_POST['InputAddProjectBudget-' . $x];
            $areaType_id_ = $_POST['InputAddProjectAreaType-' . $x];

            $this->ProjectArea->setAreaName($areaName_);
            $this->ProjectArea->setBudget($budget_);
            $this->ProjectArea->setAreaTypeId($areaType_id_);
            ${"newArray$x"} = array(
                "areaName" => $this->constant->ProjectAreaAreaNameKey = $this->ProjectArea->getAreaName(), "budget" => $this->constant->ProjectAreaBudgetKey = $this->ProjectArea->getBudget(), "areaType__id" => $this->constant->ProjectAreaAreaTypeIdKey = $this->ProjectArea->getAreaTypeId()
            );
            array_push($projectAreaData, ${"newArray$x"});
        }

        $files = array_filter($_FILES['files']['name']);
        $total_count = count($_FILES['files']['name']);
        for ($i = 0; $i < $total_count; $i++) {
            $tmpFilePath = $_FILES['files']['tmp_name'][$i];

            $fileName = pathinfo($_FILES['files']['name'][$i], PATHINFO_BASENAME);
            $this->ProjectImagesPath->setImagePath($fileName);
            ${"newArray$fileName"} = array("imagePath" => $this->const->ImagePathKey = $this->ProjectImagesPath->getImagePath());

            array_push($imagePathData, ${"newArray$fileName"});

            $baseName = pathinfo($_FILES['files']['name'][$i], PATHINFO_FILENAME);
            $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
            $fileNewName = $baseName . 'addProject' . $i . '.' . $ext;

            if ($tmpFilePath != "") {
                $newFilePath = "./uploads/" . $fileNewName;
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    //Other code goes here
                }
            }
        }

        $this->AddProject->setProjectName($projectName);
        $this->AddProject->setClientName($clientName);
        $this->AddProject->setCountry($country);
        $this->AddProject->setCity($city);
        $this->AddProject->setUserId($user__id);
        $this->AddProject->setRating($rating);
        $this->AddProject->setDescription($description);

        $data = json_encode(array(

            $this->constant->AddProjectProjectNameKey => $this->AddProject->getProjectName(),
            $this->constant->AddProjectClientNameKey => $this->AddProject->getClientName(),
            $this->constant->AddProjectCountryNameKey => $this->AddProject->getCountry(),
            $this->constant->AddProjectCityKey => $this->AddProject->getCity(),
            $this->constant->AddProjectUserIdKey => $this->AddProject->getUserId(),
            $this->constant->AddProjectRatingKey => $this->AddProject->getRating(),
            $this->constant->AddProjectDescriptionKey => $this->AddProject->getDescription(),

            $this->constant->ProjectAreaKey => $projectAreaData,
            $this->constant->ProjectInterest => $projectInterestData,
            $this->constant->ProjectImagesPath => $imagePathData,
        ));

        $get_response = $this->api->callAPI($this->url->POST, $this->url->addProject, $data, true);
        if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
            echo json_encode($get_response[0]);
            $message = "Successfully Created";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>window.location.href = "http://localhost/togglehospitality/index.php/";</script>';
        } else {
            echo json_encode($get_response[0]);
            return;
        }
    }
    public function createEventAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $user = '';
        $this->getuserAPI("");
        $user__id = $_SESSION["userid"];
        $event__name = $obj->{"EventName"};
        $event__date = $obj->{'EventDate'};
        $event__starttime = $obj->{'EventStartTime'};
        $event__endtime = $obj->{'EventEndTime'};
        $remind__beforetime = $obj->{'RemindBeforeTime'};
        $event__invitemail = $obj->{'EventInviteEmail'};
        $event__additionalnotes = $obj->{'EventAdditionalNotes'};

        $this->CreateEvent->setEventName($event__name);
        $this->CreateEvent->setEventDate($event__date);
        $this->CreateEvent->setEventStartTime($event__starttime);
        $this->CreateEvent->setEventEndTime($event__endtime);
        $this->CreateEvent->setRemindBeforeTime($remind__beforetime);
        $this->CreateEvent->setEventInviteEmail($event__invitemail);
        $this->CreateEvent->setEventAdditionalNotes($event__additionalnotes);

        $data = json_encode(array(
            $this->constant->CreateEventUserIDKey => "1", //$user__id
            $this->constant->CreateEventEventNameKey => $this->CreateEvent->getEventName(),
            $this->constant->CreateEventEventDateKey => $this->CreateEvent->getEventDate(),
            $this->constant->CreateEventEventStartTimeKey => $this->CreateEvent->getEventStartTime(),
            $this->constant->CreateEventEventEndTimeKey => $this->CreateEvent->getEventEndTime(),
            $this->constant->CreateEventRemindBeforeTimeKey => $this->CreateEvent->getRemindBeforeTime(),
            $this->constant->CreateEventEventInviteEmailKey => $this->CreateEvent->getEventInviteEmail(),
            $this->constant->CreateEventEventAdditionalNotesKey => $this->CreateEvent->getEventAdditionalNotes(),
        ));

        $get_response = $this->api->callAPI($this->url->POST, $this->url->createEvent, $data, true);
        if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
            echo json_encode($get_response[0]);
            $message = "Successfully Created";
            echo "<script type='text/javascript'>alert('$message');</script>";
            //echo '<script>window.location.reload();";</script>';
        } else {
            echo json_encode($get_response[0]);
            return;
        }
    }

    public function getProjectInterestAPI()
    {
        try {
            $get_response = $this->api->callAPI($this->url->GET, $this->url->getProjectInterests, null, false);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    public function getAreaTypesAPI()
    {
        try {
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getareatypesURL, null, false);
            $response = json_decode($get_response[1]);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function sendboqrequest()
    {
        try {
            $token = $_SESSION["token"];
            $this->load->model('ServiceModel');
            $get_response = $this->ServiceModel->API($this->url->GET, $this->url->getallprojectsURL, null, true);
            $response = json_decode($get_response[1]);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
                /*  try {
                    $getprojectsResponse = new GetProjectResponse();
                    $response = \PHPGson\Gson::fromJson(
                        $getprojectsResponse,
                        $get_response[1]
                    );
                    $getprojectsResponse->getSuccess();
                    $getprojectsResponse->getCount();
                    $getprojectsResponse->getGetBuyer();
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                } */
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getEventsAPI()
    {
        try {
            $get_response = $this->api->callAPI($this->url->GET, $this->url->getEvents, null, true);
            if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
                echo json_decode(json_encode($get_response[1]), true);
            } else {
                echo json_decode($get_response[0]);
                return;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getProjectDetailsAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $user = '';
        $this->getuserAPI("");

        $__id = $obj->{'projectId'};

        $this->ProjectDetails->setProjectID($__id);

        $get_response = $this->api->callAPI($this->url->GET, $this->url->getProjectDetails . "/" . $__id, "", true);
        if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
            echo json_decode(json_encode($get_response[1]));
        } else {
            echo json_encode($get_response[0]);
            return;
        }
    }

    public function getproducts()
    {
        try {
            $search = isset($_POST['search']) ? $_POST['search'] : null;
            $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : null;
            $pageUrl = isset($_POST['pageUrl']) ? $_POST['pageUrl'] : null;
            $pageLimit = isset($_POST['pageLimit']) ? $_POST['pageLimit'] : null;
            if ($pageUrl != "" && $pageUrl != $pageNum) {
                $pageNum = $pageUrl;
            }

            if (isset($search)) {
                if (isset($pageLimit)) {
                    $json = '{"searchText":"' . $search . '","pageNumber": "' . $pageNum . '","pageLimit": "' . $pageLimit . '","filter": {"IsActive": ["0"]}}';
                } else {
                    $json = '{"searchText":"' . $search . '","pageNumber": "' . $pageNum . '","pageLimit": "20","filter": {"IsActive": ["0"]}}';
                }
            } else {
                if (isset($pageLimit)) {
                    $json = '{"pageNumber": "' . $pageNum . '","pageLimit": "' . $pageLimit . '","filter": {"IsActive": ["0"]}}';
                } else {
                    $json = '{"pageNumber": "' . $pageNum . '","pageLimit": "20","filter": {"IsActive": ["0"]}}';
                }
            }

            $jsonData = json_decode($json, true);

            $get_data = $this->api->callAPI($this->url->POST, $this->url->getproducts, json_encode($jsonData), false);
            $productsdata = json_decode($get_data[1], true);
            echo json_encode($productsdata);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getsimilarproducts()
    {
        try {
            $categoryId = isset($_POST['categoryId']) ? $_POST['categoryId'] : null;
            $searchText = isset($_POST['searchText']) ? $_POST['searchText'] : null;
            $json = '{"searchText":"' . $searchText . '","pageNumber": "1","pageLimit": "8","filter": {"IsActive": ["0"],"CategoryID":["' . $categoryId . '"]}}';
            $jsonData = json_decode($json, true);
            $get_data = $this->api->callAPI($this->url->POST, $this->url->getproducts, json_encode($jsonData), false);
            $productsdata = json_decode($get_data[1], true);
            echo json_encode($productsdata);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function getproduct()
    {
        try {
            $productId = isset($_POST['productId']) ? $_POST['productId'] : null;
            $json = '{"pageNumber": "1","pageLimit": "1","filter": {"IsActive": ["0"],"ProductId": ["' . $productId . '"]}}';
            $jsonData = json_decode($json, true);
            $get_data = $this->api->callAPI($this->url->POST, $this->url->getproducts, json_encode($jsonData), true);
            $productdata = json_decode($get_data, true);
            echo json_encode($productdata);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function generatePagination()
    {
        try {
            $productsNum = isset($_POST['productsNum']) ? $_POST['productsNum'] : null;
            $pagelimit = isset($_POST['pagelimit']) ? $_POST['pagelimit'] : null;
            $pageNum = isset($_POST['pageNum']) ? $_POST['pageNum'] : null;
            $pageUrl = isset($_POST['pageUrl']) ? $_POST['pageUrl'] : null;

            if ($pageUrl != "" && $pageUrl != $pageNum) {
                $pageNum = $pageUrl;
            }

            $this->load->model('Catalogue');
            $result = $this->Catalogue->pagination($productsNum, $pagelimit, $pageNum);
            echo json_encode($result);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function addToWishlist()
    {
        try {
            $projectId = isset($_POST['projectId']) ? $_POST['projectId'] : null;
            $productId = isset($_POST['productId']) ? $_POST['productId'] : null;
            $json = '{"projectId": "' . $projectId . '","wishlistItems": [{"productid":"' . $productId . '"}]}';
            $jsonData = json_decode($json, true);
            $get_data = $this->api->callAPI($this->url->POST, $this->url->wishlist . $projectId, json_encode($jsonData), true);
            $productdata = json_decode($get_data, true);
            echo json_encode($productdata);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function suggestiveSearch()
    {
        $searchText = isset($_POST['searchField']) ? $_POST['searchField'] : null;
        $searchText = str_replace(" ", "+", $searchText);
        $get_data = $this->api->callAPI($this->url->GET, $this->url->suggestiveSearch . $searchText . "/1/20", "", false);
        $productsdata = json_decode($get_data[1], true);
        echo json_encode($productsdata);
    }

    public function editProjectAPI()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $user = '';
        $this->getuserAPI("");

        $projectId = $_POST['InputEditProjectProjectId'];
        $userid = $_SESSION["userid"];
        $projectName = $_POST['InputWorkStationProjectName'];
        $clientName = $_POST['InputWorkStationClientName'];
        $country = $_POST['InputWorkStationCityName'];
        $city = $_POST['InputWorkStationCountryNames'];
        $user__id = $userid;
        $rating = $_POST['rating'];
        $description = $_POST['TextAreaWorkStationDescription'];
        $rows = $_POST['hiddenRowNum'];

        $projectAreaData = array();
        $projectInterestData = array();
        $imagePathData = array();

        /* if(!empty($_POST['projectInterestArr'])) {
            foreach($_POST['projectInterestArr'] as $check) {                
                $this->ProjectInterest->setProjectInterest($check);
                ${"newArray$check"} = array("projectInterestId"=>$this->constant->ProjectInterestIDKey = $this->ProjectInterest->getProjectInterest());
                array_push($projectInterestData,${"newArray$check"});
            }
        }    */

        $this->ProjectInterest->setProjectInterest('5f970f0cbe96120024ee61a6');
        $test = array("projectInterestId" => $this->constant->ProjectInterestIDKey = $this->ProjectInterest->getProjectInterest());

        array_push($projectInterestData, '5f970f0cbe96120024ee61a6');

        for ($x = 1; $x <= $rows; $x++) {
            $areaName_ = $budget_ = $areaType_id_ = '';

            $areaName_ = 'test';
            $budget_ = '5000';
            $areaType_id_ = '5f970f0cbe96120024ee61a6';

            $this->ProjectArea->setAreaName($areaName_);
            $this->ProjectArea->setBudget($budget_);
            $this->ProjectArea->setAreaTypeId($areaType_id_);
            ${"newArray$x"} = array(
                "areaName" => $this->constant->ProjectAreaAreaNameKey = $this->ProjectArea->getAreaName(), "budget" => $this->constant->ProjectAreaBudgetKey = $this->ProjectArea->getBudget(), "areaType__id" => $this->constant->ProjectAreaAreaTypeIdKey = $this->ProjectArea->getAreaTypeId()
            );
            array_push($projectAreaData, ${"newArray$x"});
        }

        $files = array_filter($_FILES['files']['name']);
        $total_count = count($_FILES['files']['name']);
        for ($i = 0; $i < $total_count; $i++) {
            $tmpFilePath = $_FILES['files']['tmp_name'][$i];

            $fileName = pathinfo($_FILES['files']['name'][$i], PATHINFO_BASENAME);
            $this->ProjectImagesPath->setImagePath($fileName);
            ${"newArray$fileName"} = array("imagePath" => $this->const->ImagePathKey = $this->ProjectImagesPath->getImagePath());

            array_push($imagePathData, ${"newArray$fileName"});

            $baseName = pathinfo($_FILES['files']['name'][$i], PATHINFO_FILENAME);
            $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
            $fileNewName = $baseName . 'addProject' . $i . '.' . $ext;

            if ($tmpFilePath != "") {
                $newFilePath = "./uploads/" . $fileNewName;
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    //Other code goes here
                }
            }
        }

        $this->AddProject->setProjectName($projectName);
        $this->AddProject->setClientName($clientName);
        $this->AddProject->setCountry($country);
        $this->AddProject->setCity($city);
        $this->AddProject->setUserId($user__id);
        $this->AddProject->setRating($rating);
        $this->AddProject->setDescription($description);

        $data = json_encode(array(

            $this->constant->AddProjectProjectNameKey => $this->AddProject->getProjectName(),
            $this->constant->AddProjectClientNameKey => $this->AddProject->getClientName(),
            $this->constant->AddProjectCountryNameKey => $this->AddProject->getCountry(),
            $this->constant->AddProjectCityKey => $this->AddProject->getCity(),
            $this->constant->AddProjectUserIdKey => $this->AddProject->getUserId(),
            $this->constant->AddProjectRatingKey => $this->AddProject->getRating(),
            $this->constant->AddProjectDescriptionKey => $this->AddProject->getDescription(),

            $this->constant->ProjectAreaKey => $projectAreaData,
            $this->constant->ProjectInterest => $projectInterestData,
            $this->constant->ProjectImagesPath => $imagePathData,
        ));

        $get_response = $this->api->callAPI($this->url->PATCH, $this->url->addProject . '/' . $projectId, $data, true);
        if ($get_response[0] == $this->statuscodes->StatusCodeOK || $get_response[0] == $this->statuscodes->StatusCodeCreated) {
            echo json_encode($get_response[0]);
            //$message = "Successfully Updated";
            //echo "<script type='text/javascript'>alert('$message');</script>";
            //<?php echo base_url("index.php/authenticate/workStation"); 
            echo '<script>window.location.href = "http://localhost/togglehospitality/index.php/authenticate/workStation";</script>';
        } else {
            echo json_encode($get_response[0]);
            return;
        }
    }

    public function Logout()
    {
        session_destroy();
        header("Location:" . base_url() . "index.php/authenticate/signin");
        
    }
}
