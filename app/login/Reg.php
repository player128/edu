<?php
namespace Edu\app\login;

require_once('C:\xampp\htdocs\edu\app\login\User.php');

$name = $_POST['name'];
$pass = $_POST['pass'];

echo $name."-".$pass;

$user = new User($name, $pass);
$user->reg();