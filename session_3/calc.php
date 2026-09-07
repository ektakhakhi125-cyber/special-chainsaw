<?php

$ticketPrice = 250;
$numberOfTickets = 3;

$ticketTotal = $ticketPrice * $numberOfTickets;

$bookingFee = $ticketTotal * 5 / 100;

$finalAmount = $ticketTotal + $bookingFee;

echo "Ticket Total: ₹" . $ticketTotal . "<br>";
echo "Online Booking Fee (5%): ₹" . $bookingFee . "<br>";
echo "Final Amount: ₹" . $finalAmount;

?>