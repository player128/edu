<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
use \Edu\app\login\User;
class Controller_Regis extends Controller
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
        
        $user = new User($name, $pass);
        if ($user->reg()) {
            echo json_encode("Аккаунт зарегистрирован.");
        } else {
            echo json_encode("-1");
        }
	}
}