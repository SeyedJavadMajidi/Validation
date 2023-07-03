<?php
namespace App\Validation;
interface InterfaceValid
{
    public function valid($value): bool;
    public function getMessage(): string;
}