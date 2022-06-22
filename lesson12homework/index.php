<?php error_reporting(-1);

//1.

$min = 60;
$hour = $min * 60;
$day = $hour * 24;
$week = $day * 7;
echo $hour . PHP_EOL . $day . PHP_EOL . $week . PHP_EOL;

//2

$x = 60;
$x *= 60;
echo $x . "\n";
$x *= 24;
echo $x . "\n";
$x *= 7;
echo $x . "\n";

