<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}



function str_count($str, $substr) 
{
    return substr_count($str, $substr);
}
// echo str_count ('hello', 'l');


function no_space(string $str): string
{
    return str_replace(' ', '', $str);
}
// var_dump(no_space('hello world '));


function max_number(int $num): int 
{
    $digits = str_split($num);
    rsort($digits);
    return (int)implode($digits);
}

echo max_number(193);