<?php
namespace Edu\app\login;

require_once('C:\xampp\htdocs\edu\app\login\User.php');

$name = $_POST['name'];
$pass = $_POST['pass'];

$user = new User($name, $pass);
if ($user->auth()) {
    echo json_encode(1);
}else {
    echo json_encode(0);
}






