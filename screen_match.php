<?php

echo "Welcome to the Screen match!\n";

$movieName =  "Top Gun - Maverick";
// data entry
$releaseYear = $argv[1] ?? 2022;

//aggregation operators
$scoreSum = 9;
$scoreSum += 5;
$scoreSum += 8; 
$scoreSum += 7.8;
$scoreSum += 8;


$movieScore = $scoreSum / 5;

$prime = true;


//logic operators
$includeInThePlan = $prime || $releaseYear < 2020;

// string manipulation
echo "Movie: ". $movieName . "\n";
echo "Score: $movieScore\n";
echo "Release Year: $releaseYear\n";

if ($releaseYear < 2020) {
    echo "This movie is a classic!\n";
} elseif ($releaseYear >= 2020 && $releaseYear <= 2025) 
    echo "This movie is a recent release!\n";
else{
    echo "This movie is new!\n";
}
