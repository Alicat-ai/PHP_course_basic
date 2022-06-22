<?php error_reporting(-1);

// function sum(...$nums)
// {
//     $res = 0;
//     foreach ($nums as $num){
//         $res += $num;
//     }
//     echo $res;
// }

// sum(1,2,3,4,5);



// function test()
// {
//     static $a = 0;
//     echo $a;
//     $a++;
// }

// test ();
// test ();
// test ();



// function sum(int $a, int $b, int $c)
// {
//     echo $a + $b + $c;
// }
// sum(1, 2.5, 3);



// function sum(int $a, int $b, int $c)
// {
//     return $a + $b + $c;
// }
// $res = sum(1, 2.5, 3);
// var_dump($res);



// function test()
// {

// }

// var_dump(test());



// function sum( $a,  $b,  $c): int
// {
//     return $a + $b + $c;
// }

// echo sum(1, 2.5, 3);



// function sum( $a,  $b,  $c): float
// {
//     return $a + $b + $c;
// }

// var_dump(sum(1, 2, 3));


function sum($term1, $term2 = 1, $factor = 2)
{
    return $term1 + $term2 * $factor;
}

echo sum(1, factor: 3);