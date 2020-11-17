<?php

namespace GetProjectDetail;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProjectDetails
{
    private $ProjectId;

    public function getProjectID()
    {
        return $this->ProjectId;
    }
    public function setProjectID($ProjectId)
    {
        $this->ProjectId = $ProjectId;
    }
    
}

?>