<?php


namespace App\Service;


use Exception;

class GetJSON
{
    public function decode($path)
    {
            $str = @file_get_contents($path);
            if ($str === FALSE) {
                throw new Exception("Cannot access '$path' to read contents.");
            } else {
                return json_decode($str);
            }
    }
}