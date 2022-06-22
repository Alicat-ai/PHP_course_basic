<?php error_reporting(-1);

// $a = (2+3)*5;
//  var_dump($a);

// $a = 2;
// $a = $a + 3;
// $a += 3;
// $a -= 3;
// $a = $a + (3 * 5);
// $a += 3 * 5;
// var_dump($a);

// $a = 3;
// $b = $a;
// var_dump($a, $b);
// $b = 5;
// var_dump($a, $b);

$a = 3;
$b =& $a;
var_dump($a, $b);
$b = 5;
var_dump($a, $b);