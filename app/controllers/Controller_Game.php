<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Game extends Controller
{
	function action_index($param = null)
	{	
		$this->view->generate('game_view.php', 'template_view.php');
	}
}