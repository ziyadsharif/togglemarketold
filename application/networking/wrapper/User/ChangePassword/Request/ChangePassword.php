<?php

namespace ChangePassword;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class ChangePassword
{
    private $currentpassword;
    private $newpassword;

    public function getCurrentPassword()
    {
        return $this->currentpassword;
    }
    public function setCurrentPassword($currentpassword)
    {
        $this->currentpassword = $currentpassword;
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
