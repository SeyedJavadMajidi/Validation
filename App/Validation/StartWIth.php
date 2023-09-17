<?php

namespace App\Validation;
#[\Attribute]
class StartWIth implements InterfaceValid
{
    public string $start = "";
    protected string $message = 'خطا';

    public function __construct($start = null, $message = null)
    {
        $this->start = is_null($start) ? $this->start : $start;
        $this->message = is_null($message) ? $this->message : $message;
    }

    public function valid($value): bool
    {
        if (str_starts_with($value, $this->start))
            return true;
        return false;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}