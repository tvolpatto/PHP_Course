<?php

// This file checks if a given year is a leap year or not. //Built with AI
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    }
    return false;
}

// Read year from user input
$year = (int)readline("Enter a year: ");

if (isLeapYear($year)) {
    echo "$year is a leap year.\n";
} else {
    echo "$year is not a leap year.\n";
}
?>