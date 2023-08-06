<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Time extends Controller
{
	function action_index($param = null)
	{	
		$this->view->generate('time_view.php', 'template_view.php');
	}
}