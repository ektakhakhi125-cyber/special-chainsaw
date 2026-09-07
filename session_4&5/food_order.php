<?php

$foods = ["Pizza", "Burger", "Dosa", "Biryani", "Momos"];

for ($i = 0; $i < count($foods); $i++) {

    // Skip the third food item
    if ($i == 1) {
        continue;
    }

    // Stop when Biryani is reached
    if ($foods[$i] == "Biryani") {
        break;
    }

    echo "Order " . ($i + 1) . ": " . $foods[$i] . "<br>";
}

?>