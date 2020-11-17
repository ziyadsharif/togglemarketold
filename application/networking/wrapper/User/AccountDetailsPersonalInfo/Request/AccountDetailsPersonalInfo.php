<?php

namespace AccountDetails;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class AccountDetailsPersonalInfo
{
    private $firstName;
    private $lastName;
    private $dob;
    private $nationality;


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



    public function getDOB()
    {
        return $this->dob;
    }
    public function setDOB($dob)
    {
        $this->dob = $dob;
    }

    public function getNationality()
    {
        return $this->nationality;
    }
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
}

class AccountDetailsContactInfo
{
    private $email;
    private $mobileNumber;

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
}

class AccountDetailsCompanyInfo
{
    private $name;
    private $address;
    private $country;
    private $type;
    private $city;
    private $designation;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getDesignation()
    {
        return $this->designation;
    }
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }
}
