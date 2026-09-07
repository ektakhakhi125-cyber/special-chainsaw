<?php
/*
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "<h2>Signup Details</h2>";

echo "Username: " . $username . "<br>";
echo "Email: " . $email . "<br>";
echo "Password: " . $password;
*/



$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email)) {

    echo "Error: Email is required.";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Error: Please enter a valid email address.";

} else {

    echo "<h2>Signup Successful</h2>";

    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;

}


?>