<?php

//Min and max size of array
define('SMIN', 1);
define('SMAX', 100000);
//Min and max array values
define('MIN', -100000);
define('MAX', 100000);

//Returns number of unique elements in array
function fun($a)
{
    return sizeof(array_unique($a));
}


$a = array();
//Generate random array size
$n = mt_rand(SMIN, SMAX);
//Generate array of unique random numbers
for ($i = 0; $i<$n; $i++)
    array_push($a, mt_rand(MIN, MAX));
//Echo result
echo(fun($a));

?>