<?php

$favouriteApps = [
    "Instagram",
    "WhatsApp",
    "YouTube",
    "Spotify",
    "Zomato"
];

foreach ($favouriteApps as $app) {
    echo $app . "<br>";
}




$userProfile = [
    "username" => "johndoe",
    "followers" => 1500,
    "posts" => 45
];

foreach ($userProfile as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

$orders = [
    [
        "restaurant" => "Dominoz",
        "items" => ["Migrate Pizza","garlic bread"],
        "total" => "450"
    ],

    [
        "restaurant" => "Mcdonald's",
        "items" => ["Burger","Frenshes Fries"],
        "total" => "700"
    ],

    [
        "restaurant" => "Biryani House",
        "items" => ["Chiken biryani","Rayta"],
        "total" => "450"
    ],
];

foreach ($orders as $order) {

    echo "<b>Restaurant:</b> " . $order["restaurant"] . "<br>";

    echo "<b>Items:</b>";

    foreach ($order["items"] as $item) {
        echo "- " . $item . "";
    }
    echo "<br>";
    echo "<b>Total:</b> ₹" . $order["total"] . "<br>";

    echo "<hr>";
}

?>