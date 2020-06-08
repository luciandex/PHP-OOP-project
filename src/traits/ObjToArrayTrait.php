<?php

namespace App\traits;

trait ObjToArrayTrait
{
    function objectToArray($object)
    {
        $array = array();
        foreach ($object as $key => $value) $a[$key] = (is_array($value) || is_object($value)) ? objectToArray($value) : $value;
        return $array;
    }

}