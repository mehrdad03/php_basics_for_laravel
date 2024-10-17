<?php

// valid variable names in PHP can look like:
//$myVariable
//$_myVariable
//$my_variable

//Invalid variable names would include:
//$123variable (starts with a number)
//$my-variable (contains a hyphen, which is not allowed)
//$my%variable (contains a special character %)

/*Case sensitive*/


$name='mehrdad';//string
$Name='alireza';

echo $name.'<br>';
echo $Name.'<br>';
echo gettype($name).'<br>';

$age=30;//integer
echo $age.'<br>';
echo gettype($age).'<br>';

$height=185.8;//float
echo $height.'<br>';
echo gettype($height).'<br>';

$isStudent=false;//boolean
echo gettype($isStudent).'<br>';

$userInfo=['mehrdad','dadashi',30,false];//array
print_r($userInfo);
echo gettype($userInfo).'<br>';

$car=null;//null
echo gettype($car).'<br>';
