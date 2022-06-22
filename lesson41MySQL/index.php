<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$db = mysqli_connect('localhost', 'root', '', 'world') or 
    die('Error');

// $res = mysqli_query($db, "SELECT * FROM country");
$res = mysqli_query($db, "SELECT Code, Name FROM country LIMIT 10");

// var_dump($res); 

// debug(mysqli_fetch_all($res, MYSQLI_ASSOC));

// debug(mysqli_fetch_assoc($res));

// while($row = mysqli_fetch_assoc($res)) {
    // echo "Code: {$row['Code']} / Name: {$row['Name']} <br>";
// }

$name = "d'Artanian";
$name2 = "Kuznetsov";
$age = 20;
$name = mysqli_real_escape_string($db, $name);
// var_dump(mysqli_query($db, "INSERT INTO test (name) VALUES ('$name')"));

// $query = sprintf( "INSERT INTO test (name, age) VALUES ('%s', %d)",
//     mysqli_real_escape_string($db, $name),
//     (int)$age);

// var_dump(mysqli_query($db, $query));

// $query = sprintf("UPDATE test SET name ='%s', age = %d WHERE id = 6",
//     mysqli_real_escape_string($db, $name2),
//     (int)$age);
// var_dump(mysqli_query($db, $query));

var_dump(mysqli_query($db, "DELETE FROM test WHERE id = 6"));