<?php error_reporting(-1);

$i = 4;

// $res = match($i){
//     1 => 'one',
//     2 => 'two',
//     3 => 'three',
//     4 => 'four',
//     5 => 'five',
// };

// $res = match($i){
//     1, 2, 3 => 'var < 4',
//     4 => 'four',
//     default => 'var > 4',
// };

$grade = 10;
$res = match (true) {
    $grade >= 10 => 'excellent',
    $grade >= 7 => 'good',
    $grade >= 4 => 'bad',
    default => 'very bad',
};

echo $res;