<?php

class PasswordGenerator
{
    public static function generate($password){
        $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';
        $_alphaCaps  = strtoupper($_alphaSmall);
        $_numerics   = '1234567890';
        $_specialChars = '!@#$%';
    
        $_container = [
            $_alphaSmall,
            $_alphaCaps,
            $_numerics,
            $_specialChars
        ];
        $mdp = '';
        
        for($i = 1; $i <= $password; $i++) {
            $morceau = $_container[$i % 4];
            $_rand = rand(0, strlen($morceau) - 1);
            $mdp .= substr($morceau, $_rand, 1);
        }
    
        return $mdp;
    }
}