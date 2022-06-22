<?php 
error_reporting(-1);

// var_dump($_FILES);

if (!empty($_FILES)) {
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    if (move_uploaded_file($_FILES['file']['tmp_name'], "upload/{$_FILES['file']['name']}")){
        echo 'Success';
    } else {
        echo 'Error';
    }
}

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['QUERY_STRING'];
if( !empty ($_SERVER['HTTP_REFERER'])){
    echo $_SERVER['HTTP_REFERER'];
}

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
    
<form  method="post" enctype="multipart/form-data">

<input type="file" name="file">

<button type="submit" value="send">Send</button>

</form>


</body>
</html>


