<?php

// Variable assigned with an integer
$isStudent = 1;

// Passes a variable and expression to be evaluated
var_dump($isStudent, $isStudent == $isStudent);


// Type coercion converts an int into a boolean value
// NOTE: a non-zero (positive / negative) integer value ALWAYS evaluates to true
var_dump($isStudent == true);


// Using a strict equality operator
// Checks both data type and value
var_dump($isStudent === true);


// An indexed array of 'numbers'
$scores = [85, "90", 95.5];

// Displays the first element of the array $scores
var_dump($scores[0]);

// Type coercion of elements; from their respective data types into a float
// In order to return the sum of both array elements
var_dump($scores[0] + $scores[1] + $scores[2]);

// Type casts the 2nd array element (a float) into an integer
$scores = [85, (int) "95.5"];
var_dump($scores);

$total = $scores[0] + $scores[1];
echo "Total Score is: $total \n";
