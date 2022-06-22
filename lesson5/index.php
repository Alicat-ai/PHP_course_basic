<?php error_reporting(error_level:-1);

define('CONST_1', 'value 1');

echo CONST_1;

const CONST_2 = "value 2";

var_dump(CONST_2);

const NAME = 'John';

echo "Hello, NAME"; 

//define('CONST_1', 'new value'); // only one 

//$this = "test"; never use for $

//var_dump(get_defined_constants(true)); for watching all consts
