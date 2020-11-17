<?php

namespace GetProjectResponse;

class GetProjectResponse
{

    private $success;

    private $count;

    private $GetBuyer;

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($success)
    {
        $this->success = $success;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getGetBuyer()
    {
        return $this->GetBuyer;
    }

    public function setGetBuyer($GetBuyer)
    {
        $this->GetBuyer = $GetBuyer;
    }
}


class GetBuyer
{
    private $_id;
    private $projectName;
    private $clientName;
    private $country;
    private $city;
    private $rating;
    private $projectImageUrl;
    private $description;
    private $projectArea;
    private $request;

    public function get_Id()
    {
        return $this->_id;
    }

    public function set_Id($_id)
    {
        $this->_id = $_id;
    }

    public function getProjectName()
    {
        return $this->projectName;
    }

    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    }

    public function getClientName()
    {
        return $this->clientName;
    }

    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getProjectImageUrl()
    {
        return $this->projectImageUrl;
    }

    public function setProjectImageUrl($projectImageUrl)
    {
        $this->projectImageUrl = $projectImageUrl;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getProjectArea()
    {
        return $this->projectArea;
    }

    public function setProjectArea($projectArea)
    {
        $this->projectArea = $projectArea;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest($request)
    {
        $this->projectArea = $request;
    }
}

class ProjectArea
{
    private $projectAreaId;
    private $projectAreaName;
    private $projectAreaBudget;
    private $projectAreaTypeName;
    private $projectAreaTypePic;

    public function getProjectAreaId()
    {
        return $this->projectAreaId;
    }

    public function setProjectAreaId($projectAreaId)
    {
        $this->projectAreaId = $projectAreaId;
    }

    public function getProjectAreaName()
    {
        return $this->projectAreaName;
    }

    public function setProjectAreaName($projectAreaName)
    {
        $this->projectAreaName = $projectAreaName;
    }

    public function getprojectAreaBudget()
    {
        return $this->projectAreaBudget;
    }

    public function setProjectAreaBudget($projectAreaBudget)
    {
        $this->projectAreaBudget = $projectAreaBudget;
    }

    public function getProjectAreaTypeName()
    {
        return $this->projectAreaTypeName;
    }

    public function setProjectAreaTypeName($projectAreaTypeName)
    {
        $this->projectAreaTypeName = $projectAreaTypeName;
    }

    public function getProjectAreaTypePic()
    {
        return $this->projectAreaTypePic;
    }

    public function setProjectAreaTypePic($projectAreaTypePic)
    {
        $this->projectAreaTypePic = $projectAreaTypePic;
    }
}

class Reuquest
{
    private $url;
    private $type;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
