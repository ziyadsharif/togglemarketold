<?php

namespace LoginUser;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class LoginUser
{
    private $email;
    private $password;

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
