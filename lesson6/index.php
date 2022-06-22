<?php

use function PHPSTORM_META\type;

 error_reporting(error_level:-1);

$bool = true;
$bool2 = false;

// var_dump($bool2);

// echo $bool;
// echo $bool2;

// var_dump((boolean)0, (bool)'',(bool);

$int1 = 1;
$int2 = 0;

//var_dump($int1, $int2);

//var_dump(PHP_INT_MAX);

// var_dump((int)'Hello');
// var_dump((int)'10');// числовая строка
// var_dump((int)'10Hello'); //префиксная числовая строка

// var_dump("10"+ 20);
// var_dump("10str"+ 20);//warning
// var_dump("str10"+ 20);// error

$float = 1_263.267;
var_dump($float);

var_dump((float)123+10);

