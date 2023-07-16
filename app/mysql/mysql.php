<?php
namespace edu\app\mysql;

require_once('app/config/mysql.php');

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

        $result = $mysqli->query($text);
        if ($mysqli->errno) {
            die('Select Error (' . $mysqli->errno . ') ' . $mysqli->error);
        }

        return $result;
    }
}