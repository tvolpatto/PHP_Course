<?php

$meters = @$argv[1] ?? 1; // Default to 1 meter if no argument is provided
$centimeters = $meters * 100; // Convert meters to centimeters
echo "$meters meters is equal to $centimeters centimeters.\n";