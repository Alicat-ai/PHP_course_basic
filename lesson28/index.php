<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, modi ea natus provident veritatis error at illo quis recusandae voluptas officiis temporibus aliquid sunt perspiciatis culpa nobis deserunt quos dignissimos?</p>

<?php

$nums = [1,2,3,4,5,];

foreach( $nums as $num) {
    echo "<h3>Start</h3>";
    echo "<p>$num</p>";
    echo "<h3>Brake</h3>";
}

?>

<?php

$nums = [1,2,3,4,5,];

foreach( $nums as $num):
    echo "<h3>Start</h3>";
    echo "<p>$num</p>";
    echo "<h3>Brake</h3>";
endforeach;

?>



<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
    <?php foreach( $nums as $num): ?>
        <?php echo "<p>$num</p>"; ?>
    <?php endforeach; ?> 
Reiciendis magnam cumque maxime sed mollitia esse eligendi ullam maiores sunt accusantium voluptas quia perferendis, excepturi iste voluptate. Quia voluptatibus eius ipsa?</p>



</body>
</html>