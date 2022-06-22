<?php error_reporting(-1);

session_start();

if(!empty($_SESSION['count'])) {
    echo "You are here {$_SESSION['count']}";
}

?>
<a href="index.php">Index</a>