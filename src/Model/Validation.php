<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen ($name) >2;
    }

    public static function validateStreetNumber (float $StreetNumber)
    {
        return $StreetNumber > 0; 
    }

    public static function validateCnpj (string $cnpj){
        return mb_strlen($cnpj) == 14;
    }
    public static function validateAddress(string $Address)
    {
        return mb_strlen ($Address) >2;
    }
   
    public static function validateNeighborhood(string $Neighborhood)
    {
        return mb_strlen ($Neighborhood) >2;
    }
    public static function validateCity(string $City)
    {
        return mb_strlen ($City) >2;
    }
    public static function validatePostalCode (string $PostalCode)
    {
        return mb_strlen ($PostalCode) >2;
    }  
}