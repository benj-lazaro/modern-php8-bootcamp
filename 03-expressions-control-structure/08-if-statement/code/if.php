<?php

// Normal if statements
$x = 10;

if ($x > 5) {
    echo "x is greater than 5\n";
}

$score = 95;

if ($score >= 90) {
    echo "A\n";
} else if ($score >= 80) {
    echo "B\n";
} else if ($score >= 70) {
    echo "C\n";
} else if ($score >= 60) {
    echo "D\n";
} else {
    echo "F\n";
}


// Nested if statements
$num = -3;

// Check if it is a positive number
if ($num > 0) {
    // Check if it is an even or odd number
    if ($num % 2 == 0) {
        echo "Positive even number\n";
    } else {
        echo "Positive odd number\n";
    }
} else {
    echo "Non-positive number\n";
}


// If statement working with a logical operator
$username = "admin";
$password = "password123";

if ($username == "admin" && $password == "password123") {
    echo "Access granted...\n";
} else {
    echo "Access denied...\n";
}
