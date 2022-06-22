<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$nums = [1,2,4,2,5,7,9,6,7,9,4,6,8,3,4,];

// function user_count($arr): int
// {
//     $cnt = 0;
//     foreach($arr as $item){
//         $cnt++;
//     }
//     return $cnt;
// }

// echo user_count($nums);

// function user_sum($arr) 
// {
//     $sum = 0;
//     foreach($arr as $item) {
//         $sum += $item;
//     }
//     return $sum;
// }

// echo user_sum($nums);

// echo array_sum($nums);




// debug(range(1, 100));


// function create($num)
// {
//     $i = 1;
//     while($i <= $num){
//         $arr[] = $i;
//         $i++;
//     }

//     return $arr;
// }
// var_dump(create(100));

// function create($num)
// {
//     for ($i = 1; $i <= 100; $i++ ){
//         $arr[] = $i;
//     }
//     return $arr;
// }

// var_dump(create($arr));

$arr = [];
for ($i=1; $i <= 100 ; $i++) { 
    // $arr[] = $i;
    array_push($arr, $i);
} 
debug($arr);











//20, int, print table

// for ($i = 1; $i <= 20; $i++)
// {
//     $arr[] = $i;
// }

// var_dump($arr);


// foreach ($arr as $value) {
//     # code...
//     echo $value;
// }




// echo '<table border= "1" width = "100%">';
// foreach ($arr as $tr) {
//     # code...
//     echo '<tr>';
//     foreach ($arr as $td) {
//         # code...
//         echo "<td>" . $td * $tr . "</td>";
//     }
//     echo '</tr>';
// }
// echo '</table>';