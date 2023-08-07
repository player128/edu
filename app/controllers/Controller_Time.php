<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
use \Edu\app\mysql\Mysql;
class Controller_Time extends Controller
{
	function action_index($param = null)
	{	
		$this->view->generate('time_view.php', 'template_view.php');
	}

	function action_get()
	{
		$mysql = new Mysql();
        $query = "SELECT * FROM `time`";
        $result = $mysql->query($query);

        if (!$result) {
            return false;
        }

        if ($result->num_rows === 0) {
            // echo 'Неверный логин или пароль!';
            return false;
        }

		$data = [];
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$data = array_merge($data, [$row]);
		}
		
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		$data = json_encode($data);
		echo $data;

		mysqli_free_result($result);
        return true;
	}
}