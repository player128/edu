<?php
namespace Edu\app\login;

require_once('C:\xampp\htdocs\edu\app\mysql\mysql.php');
use \Edu\app\mysql\Mysql;

class User 
{
    private $name;
    private $password;

    function __construct($name, $pass)
	{
        $this->name = $name;
        $this->password = $pass;
	}

    function reg()
    {
       if ( $this->check()) {
            return false;
       }
       return $this->create();
    }

    function auth()
    {
        $mysql = new Mysql();
        $query = "SELECT * FROM `users` WHERE `name`= '$this->name' AND `pass` = '$this->password'";
        $result = $mysql->query($query);

        if (!$result) {
            return false;
        }

        if ($result->num_rows === 0) {
            // echo 'Неверный логин или пароль!';
            return false;
        }

        return true;
    }

    function create()
    {
        $name = 'name';
        $password = 'pass';

        $mysql = new Mysql();
        $query = "INSERT INTO `users`(`name`, `pass`) VALUES ('$this->name','$this->password')";
        $result = $mysql->query($query);

        return $result;
    }

    function check()
    {
        $name = 'name';
        $password = 'pass';

        $mysql = new Mysql();
        $query = "SELECT * FROM `users` WHERE `name`= '$this->name'";
        $result = $mysql->query($query);

        if (!$result) { // Если возникает ошибка при запросе, возвращаем false
            return false;
        }

        if ($result->num_rows > 0) {
            // echo 'Такой аккаунт уже есть!';
            return true;
        }

        return false; 
    }
}