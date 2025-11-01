<?php

// Echo statement accepts (and outputs) a string
echo "Welcome to PHP!\n";

// Assignment expression on a variable
$name = "Alice\n";

// Echo statmennt accepts a variable & outputs its stored value
echo $name;

// Alternative: combining an echo statement & assignment expression in a single statement
echo $name = "Alicia\n";

// Concatenation operatpr
$name = "Alice";
echo "Hello there, " . $name . "!\n";

// Arithmetic operation
$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;

// Type Coercion; implicitly typecasts the value of $totalSlices into a string
echo "Total pizza slices: " . $totalSlices . "\n";
// To validate Type Coercion
var_dump("Total pizza slices: " . $totalSlices);

// Boolean value(s) and Ternary operator
$isHungry = true;
echo "Hungry?";
echo $isHungry ? " Yes, I'm hungry.\n" : " No, I'm full.\n";
