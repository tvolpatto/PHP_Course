<?php

echo "Welcome to the Screen match!
";

$movieName =  "Top Gun - Maverick";
$releaseYear = 2022;
//aggregation operators
$scoreSum = 9;
$scoreSum += 5;
$scoreSum += 8; 
$scoreSum += 7.8;
$scoreSum += 8;


$movieScore = $scoreSum/5;

$prime = true;


//logic operators
$includeInThePlan = $prime || $releaseYear < 2020;

echo $movieName;
