<?php

    function generatePassword($lenght, $specialChars, $maiusculas, $numbers) {
        $chars = "abcdefghijklmnopqrstuwxyz";
            if ($specialChars) {
                $chars .= "!@#$%^&*()_=+?";
            }

        $chars = "abcdefghijklmnopqrstuwxyz";
            if($numbers) {
                $chars .= "1234567890";
            }
        
        $chars = "abcdefghijklmnopqrstuwxyz";    
            if ($maiusculas) {
                $chars .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            }          

            $password = substr(str_shuffle($chars), 0, $lenght);

            return $password;
    }

    echo generatePassword(10, true);

?>