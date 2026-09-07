<?php

$firstName = "arjun";
$lastName = "patel";

$username = $firstName . "_" . $lastName;

echo $username;
echo "<br><br>";


//  replace with
$songTitle = "Shape Of You";

$urlTitle = str_replace(" ", "-", $songTitle);

echo $urlTitle;
echo "<br><br>";

// Remove extra space

$productName = " Apple iPhone     14 Pro Max ";

$cleanName = trim($productName);

echo $cleanName;
echo "<br><br>";


//getShortBio() function
function getShortBio($bio)
{
    $bio = trim($bio);

    if (strlen($bio) < 30) {
        return substr($bio, 0, 10) . "...";
    }

    return $bio;
}

$instagramBio = "I love travelling, photography and exploring new places. I so much enjoy this place . It is good place";

echo getShortBio($instagramBio);

echo "<br><br>";



// explode() implode()

$teams = "CSK,MI,RCB,GT";

$teamArray = explode(",", $teams);

$result = implode("|", $teamArray);

echo $result;




?>