<?php

namespace App\Validation;

trait Validator
{
    function validate(array $list = null): array
    {
        $err = [];
        $props = array_keys(get_class_vars(self::class));
        if (!is_null($list))
            $props = $list;
        foreach ($props as $prop) {
            $refs = new \ReflectionProperty(self::class, $prop);
            foreach ($refs->getAttributes() as $ref) {
//                $cl = explode('\\', $ref->getName());
//                $cl = "App\Validation\\" . $cl[count($cl) - 1];
//                $v = new $cl;//$ref->newInstance();
                $v = $ref->newInstance();
                if ($v instanceof InterfaceValid) {
                    if (!$v->valid($this->{$prop}))
                        $err[] = $v->getMessage();
                }
            }
        }
        return $err;
    }
}