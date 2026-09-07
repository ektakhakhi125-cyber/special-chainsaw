<?php

$paymentChoice = 5;

switch ($paymentChoice) {
    case 1:
        echo "UPI";
        break;

    case 2:
        echo "Credit Card";
        break;

    case 3:
        echo "Wallet";
        break;

    case 4:
        echo "Cash";
        break;

    default:
        echo "Invalid option<br><Br>";
}




$followers = 5000;

if ($followers > 100000) {

    echo "Blue Tick";

} else {

    if ($followers >= 10000) {
        echo "Rising Star";

    } else {

        if ($followers >= 1000) {
            echo "Active User";

        } else {
            echo "Newbie";
        }
    }
}


?>