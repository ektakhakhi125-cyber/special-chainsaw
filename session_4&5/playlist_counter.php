<?php

$song = 1;

while ($song <= 10) {
    echo "Song " . $song . " played<br><br><br>";
    $song++;
}



$foods = ["Pizza", "Burger", "Dosa", "Biryani", "Momos"];

for ($i = 0; $i < count($foods); $i++) {
    echo "Order " . ($i + 1) . ": " . $foods[$i] . "<br><br>";
}




$apps = ["Instagram", "WhatsApp", "Flipkart", "Paytm", "YouTube"];

foreach ($apps as $app) {
    echo $app . " is awesome!<br>";
}



$teams = ["Team A", "Team B"];

for ($team = 0; $team < count($teams); $team++) {

    for ($over = 1; $over <= 3; $over++) {

        echo $teams[$team] . ", Over " . $over . ": ";

        for ($ball = 1; $ball <= 6; $ball++) {
            echo rand(1, 6) . " ";
        }

        echo "<br>";
    }

    echo "<br>";
}




?>