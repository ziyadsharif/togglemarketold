<?php

class GetCountries
{

    private $success;

    private $message;

    private $countryList;

    public function getSuccess()
    {
        return $this->success;
    }
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getMessage()
    {
        return $this->message;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getcountryList()
    {
        return $this->countryList;
    }
    public function setcountryList($countryList)
    {
        $this->countryList = $countryList;
    }
}

class Countries
{

    private $id;

    private $countryName;

    private $request;

    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }

    public function getcountryName()
    {
        return $this->countryName;
    }
    public function setcountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    public function getrequest()
    {
        return $this->request;
    }
    public function setrequest($request)
    {
        $this->request = $request;
    }
}

class requestCountries
{
    private $type;
    private $url;

    public function getType()
    {
        return $this->type;
    }

    public function settype($type)
    {
        $this->type = $type;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}
