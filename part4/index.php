<?php

//echo:
//Outputs one or more strings.
//Does not return any value.
//Slightly faster because it is a language construct, not a function.

$name='mehrdad';
//echo $name.'<br>';


//print_r:
//Prints human-readable information about a variable.
//Mainly used for displaying arrays and objects.
//The output is easier to read and less detailed.


$array=['name'=>'mehrdad','family'=>'dadashi','age'=>30];
//print_r($array).'<br>';


//var_dump:
//Displays structured information about one or more variables, including type and value.
//Provides detailed information such as data type and length.
//Can be used with all types of variables.
//More verbose and detailed, suitable for debugging.

var_dump($array);