<?php error_reporting(-1);

// for ($i = 1; $i <= 20; $i++){
//     if (!($i % 2)){
//         continue;
//     }
//     echo "{$i}<br>";
// }

$i = 1;
while (true) {
   echo "$i<br>";
   if ($i == 20){
       echo "find";
       break;
   }
   $i++;
}