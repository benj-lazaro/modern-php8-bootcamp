<?php

// Grade Calculator and Pass/Fail Checker Exercise

// 1. Create a variable $score and assign it a numeric value between 0 and 100.
// 2. Use if-elseif-else statements to determine the letter grade based on the following scale:
//    A: 90-100, B: 80-89, C: 70-79, D: 60-69, F: 0-59
// 3. Create a boolean variable $isPassing and set it to true if the score is 60 or above, false otherwise.
// 4. Use echo to print a message in the format: "Score: [score], Grade: [letter grade], Passing: [true/false]"

// Write your code below this line. When you're done, click "Run tests".
// If you're successful, you'll see the green "Success" badge.
// If any of the tests fail, click on the failed test to see a detailed error message.

$score = 78;
$isPassing = true;


if ($score >= 90) {
    $letterGrade = "A";
} else if ($score >= 80) {
    $letterGrade = "B";
} else if ($score >= 70) {
    $letterGrade = "C";
} else if ($score >= 60) {
    $letterGrade = "D";
} else {
    $letterGrade = "F";
}

if ($score >= 60) $isPassing = true;
else $isPassing = false;

if ($isPassing) echo "Score: $score, Grade: $letterGrade, Passing: true";
else echo "Score: $score, Grade: $letterGrade, Passing: false";
