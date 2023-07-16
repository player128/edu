<?php
namespace edu\app\core;

use edu\app\mysql\Mysql;

$name = 'name';
$password = 'pass';

$mysql = new Mysql();
$query = "SELECT * FROM `users` WHERE `name`= '$name' AND `pass` = '$password'";
$result = $mysql->query($query);

if ($result->num_rows === 0) {
    echo 'Неверный логин или пароль!';
}



