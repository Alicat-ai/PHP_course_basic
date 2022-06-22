<?php

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function registration(): bool
{
    global $pdo;

    $login = !empty($_POST['login']) ? trim($_POST['login']) : '';
    $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

    if(empty($login) || empty($pass)){
        $_SESSION['errors'] = 'Login/pass is necessarily';
        return false;
    }


    $res = $pdo->prepare("SELECT COUNT(*) FROM users WHERE login = ?");
    $res->execute([$login]);
    if($res->fetchColumn()){
        $_SESSION['errors'] = 'Name is busy';
        return false;
    }

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $res = $pdo->prepare("INSERT INTO users (login, pass) VALUES (?,?)");
    if($res->execute([$login, $pass])){
        $_SESSION['success'] = 'Registration is successful';
        return true;
    } else {
        $_SESSION['errors'] = 'Error registration';
        return false;
    }

}

function login(): bool
{
    global $pdo;

    $login = !empty($_POST['login']) ? trim($_POST['login']) : '';
    $pass = !empty($_POST['pass']) ? trim($_POST['pass']) : '';

    if(empty($login) || empty($pass)){
        $_SESSION['errors'] = 'Login/pass is necessarily';
        return false;
    }

    $res = $pdo->prepare("SELECT * FROM users WHERE login = ?");
    $res->execute([$login]);
    if (!$user = $res->fetch()) {
        $_SESSION['errors'] = 'Login/pass is invalid';
        return false;
    } 

    // debug($user);
    // die;

    if (!password_verify($pass, $user['pass'])) {
        $_SESSION['errors'] = 'Login/pass is invalid';
        return false;
    } else {
        $_SESSION['success'] = 'Welcome';
        $_SESSION['user']['name'] = $user['login'];
        $_SESSION['user']['id'] = $user['id'];
        return true;
    }
}


function save_message(): bool
{
    global $pdo;
    $message = !empty($_POST['message']) ? trim($_POST['message']) : '';

    if (!isset($_SESSION['user']['name'])){
        $_SESSION['errors'] = 'Log in';
        return false;
    }

    if(empty($message)){
        $_SESSION['errors'] = 'Write the message';
        return false;
    }

    $res = $pdo->prepare("INSERT INTO messages (name, message) VALUES (?,?)");
    if($res->execute([$_SESSION['user']['name'], $message])) {
        $_SESSION['success'] = 'Message added';
        return true;
    } else {
        $_SESSION['errors'] = 'Write the message';
        return false;
    }
}

function get_messages(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM messages");
    return $res->fetchAll();
}