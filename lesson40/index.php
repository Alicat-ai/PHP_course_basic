<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

// var_dump(copy('file.txt', 'folder/file2.txt'));


// if (file_exists(__DIR__ . '/folder/file2.txt')) {
//     echo 'OK'; 
// } else {
//     echo 'NO';
// }


// echo nl2br(file_get_contents('folder/file2.txt'));
// echo file_get_contents('https://www.php.net/manual/ru/ref.array.php');

// $file = file_get_contents('file.txt');
// var_dump(file_put_contents('file2.txt', $file, FILE_APPEND));


// debug(file('file2.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));


// var_dump(rename('file3.txt', 'folder/file4.txt'));


// var_dump(mkdir('test'));
// var_dump(mkdir('1/2/3', 0777, true));
// var_dump(rmdir('1/2'));


// var_dump(unlink('folder/file4.txt'));