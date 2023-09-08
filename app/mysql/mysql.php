<?php
namespace Edu\app\mysql;

require_once('C:\xampp\htdocs\edu\app\config\mysql.php');

class Mysql
{
    function __construct()
	{

	}

    function query($text) 
    {
        /*
         Для безопасности запросов, необходимо использовать функцию, показаную ниже:
         $city = $mysqli->real_escape_string($city);
        */
        $mysqli = new \mysqli(
            DB_HOST, 
            DB_USER,
            DB_PASS,
            DB_NAME
        );
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        try { // Ловим mysql исключения, например так поймал, исключение, вызванное создание дупликата в БД для поля дата
            $result = $mysqli->query($text);
        } catch (\Exception $e) {
            return false;
        }

        if ($mysqli->errno) {
            die('Select Error (' . $mysqli->errno . ') ' . $mysqli->error);
        }

        return $result;
    }
}