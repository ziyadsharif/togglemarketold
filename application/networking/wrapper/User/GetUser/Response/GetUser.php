<?php

namespace GetUser;

class GetUser
{

    private $success;

    private $getUser;

    private $request;


    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getGetUser()
    {
        return $this->getUser;
    }

    public function setGetUser($getUser)
    {
        $this->getUser = $getUser;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }
}
