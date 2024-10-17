<?php

//Defining and Using Functions: function functionName() { .. }
//Parameters and Arguments

function sum($a, $b)
{
    echo $a + $b;
}

$a = 15;
$b = 15;

//sum($a, $b);

//Anonymous Functions (Closures)


$cross = function ($c, $d) {
return $c*$d;
};

$c=20;
$d=10;

//echo  $cross($c,$d);


//Recursive Functions


function power($x,$n)
{
    if ($n===0){
        return 1;
    }elseif($n>0){
        return  $x*power($x,$n-1);
    }
}

//2*2*2

echo power(2,3);