<?php

namespace App\Validation;
#[\Attribute]
class MinLength implements InterfaceValid
{
    public int $length = 5;
    protected string $message = 'خطا';

    public function __construct($length = null, $message = null)
    {
        $this->length = is_null($length) ? $this->length : $length;
        $this->message = is_null($message) ? $this->message : $message;
    }

    public function valid($value): bool
    {
        if (mb_strlen($value,'utf-8') >= $this->length)
            return true;
        return false;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}