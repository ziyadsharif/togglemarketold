<?php

namespace CreateUser;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class CreateUser
{
    private $userName;
    private $password;
    private $blackList;
    private $isActive;
    private $userDetails;
    private $companyDetails;


    public function getUserName()
    {
        return $this->userName;
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getblackList()
    {
        return $this->blackList;
    }
    public function setblackList($blackList)
    {
        $this->blackList = $blackList;
    }

    public function getisActive()
    {
        return $this->isActive;
    }
    public function setisActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getuserDetails()
    {
        return $this->userDetails;
    }
    public function setuserDetails($userDetails)
    {
        $this->userDetails = $userDetails;
    }

    public function getCompanyDetails()
    {
        return $this->companyDetails;
    }
    public function setCompanyDetails($companyDetails)
    {
        $this->companyDetails = $companyDetails;
    }
}

class UserDetails
{
    private $_id;
    private $firstName;
    private $lastName;
    private $nationality;
    private $dob;
    private $email;
    private $mobileNumber;
    private $extension;

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
    }
}

class CompanyDetails
{
    private $companyName;
    private $companyAddress;
    private $designation;
    private $natureOfBusiness;
    private $city;
    private $country;
    private $type_id;

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;
    }

    public function getDesignation()
    {
        return $this->designation;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function getNatureOfBusiness()
    {
        return $this->natureOfBusiness;
    }

    public function setNatureOfBusiness($natureOfBusiness)
    {
        $this->natureOfBusiness = $natureOfBusiness;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getType_id()
    {
        return $this->type_id;
    }
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;
    }
}
