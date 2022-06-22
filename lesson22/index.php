<?php error_reporting(-1);

// $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

// $i = 0;
// while ($i < 9) {
//     echo $nums[$i] . '<br>';
//     $i++;
// }

// for ($i = 0; $i < 9; $i++) {
//     echo $nums[$i] . '<br>';
// }

// foreach ($nums as $num) {
//     echo $num . '<br>';
// }

// foreach ($nums as $k => $v) {
//     echo "Key: $k, Value: $v <br>";
// }

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

// echo '<pre>' . print_r($goods, 1) . '</pre>';

// for ($i = 0; $i < 3; $i++) {
//     echo "Name: {$goods[$i]['title']} <br> ";
//     echo "Price: {$goods[$i]['price']} <br> ";
//     echo "Qty: {$goods[$i]['qty']} <br> ";
//     echo "<hr>";
// }


// foreach ($goods as $good) {
//     echo "Name: {$good['title']} <br>";
//     echo "Price: {$good['price']} <br>";
//     echo "Qty: {$good['qty']} <br>";
//     echo "<hr>";
// }

foreach ($goods as &$good) {
    $good['price'] *= 2;
}

// for ($i = 0; $i < 3; $i++) {
//     $goods[$i]['price'] *= 2;
//     $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty'];
// }
echo '<pre>' . print_r($goods, 1) . '</pre>';





























// }

// $tvs = [
//     [
//         'title' => 'Samsung',
//         'price' => 100,
//         'qty' => 10,
//     ],
//     [
//         'title' => 'Sony',
//         'price' => 130,
//         'qty' => 20,
//     ],
//     [
//         'title' => 'LG',
//         'price' => 160,
//         'qty' => 30,
//     ],
//     [
//         'title' => 'Kivi',
//         'price' => 190,
//         'qty' => 30,
//     ],
//     [
//         'title' => 'Spark',
//         'price' => 210,
//         'qty' => 30,
//     ],
//     [
//         'title' => 'ETron',
//         'price' => 240,
//         'qty' => 30,
//     ],
// ];

// // echo $tvs[4]['price'];

// for ($i = 0; $i < 6; $i++) {
//     echo "{$tvs[$i]['price']} <br>"; 
//     echo "{$tvs[$i]['title']} <br>";
//     echo "{$tvs[$i]['qty']} <br>";
//     echo '<hr>';
// }










