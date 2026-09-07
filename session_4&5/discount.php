<?php

$orderAmount = 600;

if ($orderAmount < 200) {
    echo "No discount";
} elseif ($orderAmount >= 200 && $orderAmount <= 499) {
    echo "10% discount";
} else {
    echo "Food disc.20% discount <br><br>";
}


$rating = 9;

if ($rating >= 8) {
    echo "Blockbuster";
} elseif ($rating >= 6) {
    echo "Hit";
} elseif ($rating >= 4) {
    echo "Average";
} else {
    echo "Flop";
}

?>