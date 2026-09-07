<?php

$enteredPassword = "12345";
$actualPassword = "12345";

if ($enteredPassword === $actualPassword && !empty($enteredPassword)) {
    echo "Login Successful <br><br>";
} else {
    echo "Login Failed";
}




$firstName = "Virat";
$lastName = "Kohli";

$message = "Welcome, " . $firstName . " " . $lastName . "!";

echo $message;



?>