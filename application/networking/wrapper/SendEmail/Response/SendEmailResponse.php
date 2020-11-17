<?php

class SendEmailResponse
{

    private $success;

    private $message;

    private $messageId;

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

    public function getmessageId()
    {
        return $this->messageId;
    }

    public function setmessageId($messageId)
    {
        $this->messageId = $messageId;
    }
}
