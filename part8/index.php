<?php
//Arrays

//Indexed Arrays: These arrays use numeric indices to access values.

$fruits=['apple','banana','cherry'];

echo $fruits[2].'<br>';


//Associative Arrays: These arrays use textual keys to access values.

$user=['name'=>'mehrdad','family'=>'dadashi','age'=>30,];

echo $user['age'].'<br>';
echo $user['name'].'<br>';


//Array Functions in PHP

//count(): Returns the number of elements in an array.

echo count($fruits).'<br>';

//array_merge(): Merges two or more arrays.

$array1=['color'=>'red',2,4];
$array2=['a','b','color'=>'green','shape'=>'circle',4];

print_r(array_merge($array1,$array2));

//array_keys(): Returns all the keys in an array.

print_r(array_keys($user));

//array_values(): Returns all the values in an array.
print_r(array_values($user));

//in_array(): Checks if a specific value exists in an array.

var_dump(in_array('bananaasd',$fruits));