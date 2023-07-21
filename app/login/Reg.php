<?php
namespace Edu\app\login;

require_once('C:\xampp\htdocs\edu\app\login\User.php');
/*
Надо ли тут проверять на пустоту переменные,
когда это может делать  JS
 */
if (empty($_POST['name']) || empty($_POST['pass'])) {
    $result = [
        'login' => '-1'
    ];
    $result = json_encode($result);
    echo $result;
    return true;
}

$name = $_POST['name'];
$pass = $_POST['pass'];

$user = new User($name, $pass);
if ($user->reg()) {
    echo json_encode("Аккаунт зарегистрирован.");
} else {
    echo json_encode("-1");
}

