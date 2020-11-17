<?php

class URL
{
    public $GET = 'GET';
    public $POST = 'POST';
    public $PUT = 'PUT';
    public $PATCH = 'PATCH';
    public $DELETE = 'DELETE';

    public $toggleapi = 'http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/';
    public $addprojectareaURL1 = "buyer-project/";
    public $addprojectareaURL2 = "projectArea/";
    public $getareatypesURL;
    public $getuserURL;
    public $getallprojectsURL;
    public $updateProjectDetails = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337​/api​/buyer-project​/";

    public function __construct()
    {
        $getareatypes = "areatype";
        $getuser = "user";
        $getallprojects = "buyer-project/";
        $getcompanydetails = "user/companyDetails/";
        $this->getareatypes = $this->toggleapi . $getareatypes;
        $this->getuserURL = $this->toggleapi . $getuser;
        $this->getallprojectsURL = $this->toggleapi . $getallprojects;
        $this->getareatypesURL = $this->toggleapi . $getareatypes;
        $this->getcompanydetailsURL = $this->toggleapi . $getcompanydetails;
    }
    public $loginURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/login";
    public $forgotpasswordURL = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/forgotPassword";
    public $createuserURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/signup";
    public $getallusersURL = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/allUser";
    //public $getuserURL =     "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/";
    public $deleteuserURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/";
    public $updateuserinfoURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/";
    public $updateuserURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/updateUser/";
    public $changepasswordURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/changePassword";
    public $sendemailURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/email/send/";
    public $getcountriesURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/country";
    public $gettypeURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/type";
    public $getproducts =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/product/search";
    public $suggestiveSearch =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/product/";


    public $updatepersonalinfoURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/personalInfo";
    public $updatecontactinfoURL =  "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/contactInfo";
    public $updatecompanydetailsURL = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/user/companyDetails/";

    public $getallproducts =  "http://localhost:3000/api/product/getallproducts";
    public $getproductsbypage =  "http://localhost:3000/api/product/getproductsbypage/";
    public $getproductscount =  "http://localhost:3000/api/product/getproductscount";
    public $getproductbyproductid =  "http://localhost:3000/api/product/getproductbyproductid/";
    public $getproductsbycategoryid =  "http://localhost:3000/api/product/getproductsbycategoryid/";

    public $getAreaTypes = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/areatype";
    public $addProject="http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/buyer-project";

    public $createEvent = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/event";
    public $getProjectInterests = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/projectinterest";
    public $getEvents = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/event";

    public $getProjectDetails = "http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/buyer-project/";
    public function addprojectURL($projectId)
    {
        $this->addprojectareaURL1 = "buyer-project/";
        $this->addprojectareaprojectIdURL = "projectArea/";
        $this->addprojectareaURL2 = "projectArea/";
        $this->addprojectareaURL = $this->toggleapi . $this->addprojectareaURL1 . $projectId . "/" . $this->addprojectareaURL2;

        return $this->addprojectareaURL;
    }

    public $editProject="http://togglemarketapis.uaenorth.cloudapp.azure.com:1337/api/buyer-project";
}
