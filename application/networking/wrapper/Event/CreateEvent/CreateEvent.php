<?php

namespace CreateEvent;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class CreateAnEvent
{
    public $EventName;
    public $EventDate;
    public $EventStartTime;
    public $EventEndTime;
    public $RemindBeforeTime;
    public $EventInviteEmail;
    public $EventAdditionalNotes;

    public function getEventName()
    {
        return $this->EventName;
    }
    public function setEventName($EventName)
    {
        $this->EventName = $EventName;
    } 

    public function getEventDate()
    {
        return $this->EventDate;
    }
    public function setEventDate($EventDate)
    {
        $this->EventDate = $EventDate;
    } 

    public function getEventStartTime()
    {
        return $this->EventStartTime;
    }
    public function setEventStartTime($EventStartTime)
    {
        $this->EventStartTime = $EventStartTime;
    } 

    public function getEventEndTime()
    {
        return $this->EventEndTime;
    }
    public function setEventEndTime($EventEndTime)
    {
        $this->EventEndTime = $EventEndTime;
    }

    public function getRemindBeforeTime()
    {
        return $this->RemindBeforeTime;
    }
    public function setRemindBeforeTime($RemindBeforeTime)
    {
        $this->RemindBeforeTime = $RemindBeforeTime;
    }

    public function getEventInviteEmail()
    {
        return $this->EventInviteEmail;
    }
    public function setEventInviteEmail($EventInviteEmail)
    {
        $this->EventInviteEmail = $EventInviteEmail;
    }

    public function getEventAdditionalNotes()
    {
        return $this->EventAdditionalNotes;
    }
    public function setEventAdditionalNotes($EventAdditionalNotes)
    {
        $this->EventAdditionalNotes = $EventAdditionalNotes;
    }

} 

?>