<?php error_reporting(-1);




$arr = [1,2,3,4,5,6,7,8,9,10,];

function get_count($arr): int
{
    $cnt = 0;
    foreach($arr as $item){
        $cnt += 1;
    }
    return $cnt;
}

echo get_count([1,2,3,4,5,6,7,8,9,10,]);

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

// echo get_count($goods);


function get_table($tr_cnt, $td_cnt)
{
    $table = '<table border = "1" width = "100%">';
    for ($tr = 1; $tr <= $tr_cnt; $tr++) {
        $table .= "<tr>";
        for ($td = 1; $td <= $td_cnt; $td++) {
            $table .= "<td> $td * $tr =" . $td * $tr . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

echo get_table(5, 7);



