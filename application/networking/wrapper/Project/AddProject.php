<?php

namespace AddProject;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class AddProject
{
    private $ProjectName;
    private $ClientName;
    private $Country;
    private $City;
    private $UserId;
    private $Rating;
    private $Description;
    private $ProjectSchema;

    public function getProjectName()
    {
        return $this->ProjectName;
    }
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
    }

    public function getClientName()
    {
        return $this->ClientName;
    }
    public function setClientName($ClientName)
    {
        $this->ClientName = $ClientName;
    }

    public function getCountry()
    {
        return $this->Country;
    }
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    public function getCity()
    {
        return $this->City;
    }
    public function setCity($City)
    {
        $this->City = $City;
    }

    public function getUserId()
    {
        return $this->UserId;
    }
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
    }

    public function getRating()
    {
        return $this->Rating;
    }
    public function setRating($Rating)
    {
        $this->Rating = $Rating;
    }

    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getProjectSchema()
    {
        return $this->ProjectSchema;
    }
    public function setProjectSchema($ProjectSchema)
    {
        $this->ProjectSchema = $ProjectSchema;
    }
}

class ProjectArea
{
    
    private $AreaName;
    private $Budget;
    private $AreaTypeId;

    public function getAreaName()
    {
        return $this->AreaName;
    }
    public function setAreaName($AreaName)
    {
        $this->AreaName = $AreaName;
    }

    public function getBudget()
    {
        return $this->Budget;
    }
    public function setBudget($Budget)
    {
        $this->Budget = $Budget;
    }

    public function getAreaTypeId()
    {
        return $this->AreaTypeId;
    }
    public function setAreaTypeId($AreaTypeId)
    {
        $this->AreaTypeId = $AreaTypeId;
    }

}

class ProjectInterest
{
    private $ProjectInterest;

    public function getProjectInterest()
    {
        return $this->ProjectInterest;
    }
    public function setProjectInterest($ProjectInterest)
    {
        $this->ProjectInterest = $ProjectInterest;
    }
}

class ProjectImagesPath
{
    private $ImagePath;

    public function getImagePath()
    {
        return $this->ImagePath;
    }
    public function setImagePath($ImagePath)
    {
        $this->ImagePath = $ImagePath;
    }
}