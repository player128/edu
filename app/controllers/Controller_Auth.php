<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
use \Edu\app\login\User;
class Controller_Auth extends Controller
{
	function action_index($param = null)
	{	
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
	}
}