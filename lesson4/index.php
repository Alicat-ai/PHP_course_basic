<?php

$title = 'Lesson4!';
$fruit = 'orange';
$winnie_the_pooh = "Hello I'm Winnie. I have 2 {$fruit}s ";

$var = 'test1';
$Var = 'test2';


?>
<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
 
<?php $title= 'lesson4';?>
<h1><?= $title ?></h1>
<p><?= $winnie_the_pooh ?></p>

<?php 
var_dump($var,$Var);
?>


</body>
</html>