<?php

//Operators

//Arithmetic Operators

$number1 = 10;
$number2 = 3;

$sum = $number1 + $number2;
echo $sum . '<br>';

$differance = $number1 - $number2;
echo $differance . '<br>';

$cross = $number1 * $number2;
echo $cross . '<br>';

$divide = $number1 / $number2;
echo $divide . '<br>';

$remain = $number1 % $number2;
echo $remain . '<br>';

//Comparison Operators

$isEqual = ($number1 == $number2);
var_dump($isEqual);

$isNotEqual = ($number1 != $number2);
var_dump($isNotEqual);

$isGreater = ($number1 > $number2);
var_dump($isGreater);

$isLess = ($number1 < $number2);
var_dump($isLess);

$isGreaterOrEqual = ($number1 >= $number2);
var_dump($isGreaterOrEqual);

$isLessOrEqual = ($number1 <= $number2);
var_dump($isLessOrEqual);

//Logical Operators

// && : AND - Returns true if both expressions are true.
// || : OR - Returns true if at least one of the expressions is true.
// ! : NOT - Returns the opposite of the boolean value.

$a = true;
$b = false;

$andResult = ($a && $b);
var_dump($andResult);

$orResult = ($a || $b);
var_dump($orResult);

$notResult = !$a;
var_dump($notResult);







