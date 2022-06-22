<?php error_reporting(-1);


// //1
// $nums = [1,2,3,4,5,6,7,8,9,10,]; 
// for ($i = 0; $i <= 9; $i++) {
//     if ($nums[$i] % 2 != 0) {
//         continue;
//     }
//     echo $nums[$i];
// }

// $nums = [1,2,3,4,5,6,7,8,9,10,]; 
// for ($i = 0; $i <= 9; $i++) {
//     if ($nums[$i] % 2 == 0) {
//         echo $nums[$i];
//     }
// }


//2

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
    [
        'title' => 'LG',
        'price' => 120,
        'qty' => 30,
    ],
];

// for ($i = 0; $i < 3; $i++) {
//     if ($goods[$i]['price'] < 130) {
//     $goods[$i]['price'] += 15;
//     }
//     echo $goods[$i]['price'], '<br>';
// }

foreach ($goods as &$good) {
    if ($good['price'] < 130) {
        $good['price'] += 15;
    }
    echo $good['price'], '<br>';
}
unset($good);