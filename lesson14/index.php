<?php error_reporting(-1);

$price = 10;
// var_dump($price);

$light = 'green';

// if ($light == 'green') {
//     echo 'You can go ';
// } else {
//     echo 'Stop';
// }

// echo $light == 'green' ? 'You can go' : 'Stop';

//echo $price ? $price : 'unknown price';
// echo $price ?: 'unknown price';
$test =  $price >= 10 ?: 'unknown price';
var_dump($test);

