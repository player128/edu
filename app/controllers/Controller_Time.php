<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
use \Edu\app\mysql\Mysql;
use \Edu\app\mysql\Collection;
use \Edu\app\models\Model_Time;


class Controller_Time extends Controller
{
	function action_index($param = null)
	{	
		$collect = new Collection("Time");
		$data = $collect->get();
		$this->view->generate('time_view.php', 'template_view.php', $data);
	}

	function action_get()
	{
		// $mysql = new Mysql();
        // $query = "SELECT * FROM `time`";
        // $result = $mysql->query($query);

        // if (!$result) {
        //     return false;
        // }

        // if ($result->num_rows === 0) {
        //     // echo 'Неверный логин или пароль!';
        //     return false;
        // }

		// $data = [];
		// while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
		// 	$data = array_merge($data, [$row]);
		// }
		
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		// $data = json_encode($data);
		// echo $data;

		// mysqli_free_result($result);

		$collect = new Collection("Time");
		$data = $collect->get();
		print_r(json_encode($data));

        return true;
	}

	function action_add() {
		if (!empty($_POST['date']) && !empty($_POST['minute'])) {
			$data = [
				"date" => $_POST['date'],
				"minute" => $_POST['minute']
			];
			$model = new Model_Time($data);
			$collect = new Collection("Time");
			$res = $collect->add($model);

			if (!$res) $res = -1;
			echo json_encode($res);
		}
	}
	function delete() {

	}

	function update() {

	}
}