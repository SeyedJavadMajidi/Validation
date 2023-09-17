<?php

namespace App\Validation;
#[\Attribute]
class EndWIth implements InterfaceValid
{
    public string $end = "";
    protected string $message = 'خطا';

    public function __construct($end = null, $message = null)
    {
        $this->end = is_null($end) ? $this->end : $end;
        $this->message = is_null($message) ? $this->message : $message;
    }

    public function valid($value): bool
    {
        if (str_ends_with($value, $this->start))
            return true;
        return false;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}