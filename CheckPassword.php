<?php 
require_once "./PasswordGenerator.php";

function checkPassword() {
    for($i = 8; $i <= 15; $i++){
        $password = PasswordGenerator::generate($i);
        if(!is_string($password)){
            throw new \Exception("Password must be a string");
            return false;
        }
        if(strlen($password) !== $i){
            throw new \Exception("Password does not match requested length (asked $i characters, got " .strlen($password).")");
            return false;
        }
        if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{".$i."}$/", $password)) {
            throw new \Exception("Password must contain at least one uppercase letter, one lowercase letter, one number digit and one special character, got $password");
            return false;
        }
    }
}

try {
    checkPassword();
} catch (\Throwable $error) {
}

