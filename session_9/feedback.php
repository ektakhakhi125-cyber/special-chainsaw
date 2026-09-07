<?php

$foodApp = $_GET['food_app'];
$email = $_GET['email'];
$review = $_GET['review'];

echo "<h2>Feedback Submitted</h2>";

echo "Favorite Food App: " . $foodApp . "<br>";
echo "Email: " . $email . "<br>";
echo "Review: " . $review;

?>