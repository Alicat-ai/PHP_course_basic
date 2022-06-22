<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 130,
        'qty' => 20,
    ],
];

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year' => 2021,
    'speed' => 220,
    'wheels' => 4,
];

$nums = [1,2,3,4,3,1,4,8,6,4,6,8,3,5,6,9,];

// echo count($nums, 1);

// debug(array_count_values($nums));

// var_dump(array_key_exists('year',$car));

// var_dump(in_array(2021, $car));

// var_dump(array_search(3, $nums));

// debug(array_keys($car));

// debug(array_values($car));

// debug(array_unique($nums));

function odd($var)
{
    //четные
    return $var % 2;
}

function even($var)
{
    // нечетные
    return !($var % 2);
}

// debug(array_filter($nums, 'even'));
// debug(array_filter($nums, 'odd'));


// debug(array_filter($nums, function ($var) {
//     return !($var % 2);
// }));