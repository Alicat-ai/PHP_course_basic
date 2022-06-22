<?php 

error_reporting(-1); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// if (isset($_POST['name'])){
//     $name = $_POST['name'];
// } else {
//     $name = '';
// }

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

?>


<!-- <?php //if(empty(trim($_POST['name']))|| empty(trim($_POST['email']))): ?> -->
<?php if(!trim ($name)|| !trim($email)): ?>

    <?php if (!empty($_POST)): ?>
        <p>Error</p>
    <?php endif; ?>


    <form action="index.php" method="post">

        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="text" name="email"></p>

        <p><button type="submit" name="send_form">Send</button></p>

    </form>
<?php else: ?>

    <p>Name: <?= $_POST['name'] ?></p>
    <p>E-mail: <?= $_POST['email'] ?></p>
    <!-- <?php print_r($_POST); ?> -->

<?php endif; ?>
</body>
</html>