<?php

namespace App\Validation;
#[\Attribute]
class PersianString implements InterfaceValid
{
    protected string $message = 'خطا';

    public function __construct($message = null)
    {
        $this->message = is_null($message) ? $this->message : $message;
    }

    public function valid($value): bool
    {
        if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', $value))
            return true;
        return false;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}