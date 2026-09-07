<?php

function getGreeting() {
    return "Good Morning";
}

echo getGreeting();





function calculateFinalPrice($price, $discountPercent = 10) {

    $discountAmount = $price * $discountPercent / 100;

    $finalPrice = $price - $discountAmount;

    return $finalPrice;
}


// Without providing discount percentage
echo "Default Discount (10%): ₹" . calculateFinalPrice(2000);

echo "<br><br>";

// Providing discount percentage
echo "Custom Discount (20%): ₹" . calculateFinalPrice(2000, 20);



function formatFollowersCount($followers) {

    if ($followers >= 1000000) {
        return number_format($followers / 1000000, 1) . "M";

    } elseif ($followers >= 1000) {
        return number_format($followers / 1000, 1) . "K";

    } else {
        return (string)$followers;
    }
}

echo "<br><br>";
echo formatFollowersCount(1500);
echo "<br>";

echo formatFollowersCount(1200000);
echo "<br>";

echo formatFollowersCount(500);

echo "<br><Br>";

$couponCode = "SAVE20";

function applyCoupon() {

    global $couponCode;

    echo "Coupon applied: " . $couponCode;
}

applyCoupon();
echo "<br><Br>";
echo "Outside function → Global scope";
echo "<br><Br>";
echo "Inside function  → Local scope";



echo "<br><Br>";

// DRY Principle:
// The discount calculation is written once inside this function.
// We can reuse the same function for multiple products
// instead of repeating the calculation code.

function calculateDiscount($price, $discountPercent) {

    $discountAmount = $price * $discountPercent / 100;

    return $price - $discountAmount;
}


echo "Mobile Final Price: ₹" . calculateDiscount(20000, 10);
echo "<br>";

echo "Laptop Final Price: ₹" . calculateDiscount(50000, 20);
echo "<br>";

echo "Headphones Final Price: ₹" . calculateDiscount(3000, 15);



?>