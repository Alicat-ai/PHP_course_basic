<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


$str = ' hello world! ';
$str2 = 'привет, мир';
$str3 = "<script>alert('&hello &gt;'+ \"world\")</script>";
$str4 = "привет!\nв первых строках своего письма...";



// echo strlen($str);
// echo strlen($str2);
// echo mb_strlen($str2);


// debug(explode(',', $str2));
// $data = explode(',', $str2);
// echo implode(',', $data);


// echo htmlspecialchars($str3);


// echo $str;
// echo ltrim($str);
// echo rtrim($str);
// echo trim($str);
// echo trim($str, 'h ');


// echo nl2br($str4);


// debug (str_split($str));


// var_dump(substr($str, 1, 5));
// var_dump(substr($str, -7, 5));
// var_dump(substr($str, -1, 1));