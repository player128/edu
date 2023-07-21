<?php
namespace Edu\app\login;

require_once('C:\xampp\htdocs\edu\app\login\User.php');

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
$result = [];
$user = new User($name, $pass);
if ($user->auth()) {
    $result = [
        'login' => '1',
        'name'  => $name
    ];

} else {
    $result = [
        'login' => '0'
    ];
}

$result = json_encode($result);
echo $result;






