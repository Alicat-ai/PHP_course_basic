<?php error_reporting(-1);

// $arr1 = array();
// $arr2 = [];

// var_dump($arr1, $arr2);

// $arr1 = [
//     1 => 'Ivanov', 
//     'Petrov', 
//     'Sidorov',
// ];

// $arr1[5] = 'Ivanovs';

// echo '<pre>' . print_r($arr1, 1) . '</pre>';

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

echo '<pre>' . print_r($goods, 1) . '</pre>';


// $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

for ($i = 1; $i < 11; $i++ ) {
    $nums[] = $i;
}

echo '<pre>' . print_r($nums, 1) . '</pre>';


