<?php

// Control Structures
// if, else, elseif, switch

$x = 10;
if ($x > 0) {
    // echo 'The number is positive';
}

$x = -5;
if ($x > 0) {
    echo 'The number is positive';
} else {
    // echo 'The number is negative';
}

$x = 0;

if ($x > 0) {
    echo 'The number is positive';
} elseif ($x < 0) {
    echo 'The number is negative';
} else {
   // echo 'The number is zero';
}


$day = 'Monday';

switch ($day) {
    case 'Monday':
        echo 'Today is Monday';
        break;
    case 'Friday';
        echo 'Today is Friday';
        break;
    default:
        echo 'Today is Sunday';
}

