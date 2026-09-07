<?php

$productPrice = 2000;
$discountPercentage = 20;

$discountAmount = $productPrice * $discountPercentage / 100;

$productPrice -= $discountAmount;

echo "Discount Amount: ₹" . $discountAmount . "<br>";
echo "Price After Discount: ₹" . $productPrice;

?>