<?php
// Temperature Converter Exercise

// Instructions:
// 1. Create a variable $celsius and assign it a numeric value.
// 2. Create a variable $fahrenheit and calculate its value using the formula: ($celsius * 9/5) + 32
// 3. Use echo to print a message in the format: "[Celsius value]C is [Fahrenheit value]F"
// 4. Example output: 20C is 68F

// Write your code below this line. When you're done, click "Run tests".
// If you're successful, you'll see the green "Success" badge.
// If any of the tests fail, click on the failed test to see a detailed error message.

$celsius = 20;
$fahrenheit = ($celsius * 9 / 5) + 32;
echo $celsius . "C is " . $fahrenheit . "F";
