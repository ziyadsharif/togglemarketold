<?php

namespace AddAreaTypeRequest;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class AddAreaTypeRequest
{
    private $areaName;
    private $areaPicture;

    public function getAreaName()
    {
        return $this->areaName;
    }
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
    }

    public function getAreaPicture()
    {
        return $this->areaPicture;
    }
    public function setAreaPicture($areaPicture)
    {
        $this->areaPicture = $areaPicture;
    }
}
