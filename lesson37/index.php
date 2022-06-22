<?php
error_reporting(-1);
session_start();

$login = 'admin';
// $password = '123';
$password = '$2y$10$wBrYSxMdH994nC542AhPcOb.sWnOWkkJ0xUAjkrP.pNiGTit9ilku';

// echo password_hash("123", PASSWORD_DEFAULT);

if (!empty($_POST)) {
    if ($_POST['login'] == $login && password_verify($_POST['password'], $password)) {
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'Success';
        header("Location: secret.php");
        die;
    }else {
        $_SESSION['res'] = 'Error';
    }
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<ul>
    <li><a href="secret.php">Secret page</a></li>
</ul>

<h3>This page can see everybode</h3>
<?php

if (isset($_SESSION['res'])){
    echo $_SESSION['res'];
    unset($_SESSION['res']);
}

?>  
<form method="POST">
    login: <input type="text" name="login">
    password: <input type="password" name="password">
    <button type="submit">Login</button>

</form>
    
</body>
</html>