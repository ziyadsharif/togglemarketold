<?php

namespace ForgotPassword;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class ForgotPassword
{
    private $userid;
    private $newpassword;

    public function getUserId()
    {
        return $this->userid;
    }
    public function setUserId($userid)
    {
        $this->userid = $userid;
    }

    public function getNewPassword()
    {
        return $this->newpassword;
    }
    public function setNewPassword($newpassword)
    {
        $this->newpassword = $newpassword;
    }
}
