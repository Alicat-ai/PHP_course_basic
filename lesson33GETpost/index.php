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
    
<form action="action.php" method="POST">

    <p>Name: <input type="text" name = "name"></p>
    <p>E-mail: <input type="email" name = "email"></p>
    <p>Text: <textarea name="message"></textarea> </p>
    <p>Agree? <input type="checkbox" name="agree"></p>
    <p>
        <select name="lang">
            <option value="ru">Russian</option>
            <option value="en">English</option>
            <option value="fr">France</option>
        </select>
    </p>
    <p>
        <select name="lang[]" multiple>
            <option value="ru">Russian</option>
            <option value="en">English</option>
            <option value="fr">France</option>
        </select>
    </p>
    <p><button type="submit" name="send_form">Send</button></p>

</form>

<hr>

<form action="action.php" method="get">

    <p>Search: <input type="text" name = "s"></p>
    <p><button type="submit" name="search_form" value="search">Send</button></p>

</form>

</body>
</html>

