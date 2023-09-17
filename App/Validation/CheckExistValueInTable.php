<?php

namespace App\Validation;

use App\Database\db;

#[\Attribute]
class CheckExistValueInTable implements InterfaceValid
{
    protected string $message = 'خطا';
    protected string $table = "";
    protected string $col = "";

    public function __construct($table, $col, $message = null)
    {
        $this->col = is_null($col) ? $this->col : $col;
        $this->table = is_null($table) ? $this->table : $table;
        $this->message = is_null($message) ? $this->message : $message;
    }

    public function valid($value): bool
    {
        $c = db::getInstance()->getConnection();
        $res = mysqli_query($c, "select * from $this->table where $this->col='$value'");

        if (mysqli_num_rows($res) == 0)
            return true;
        return false;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}