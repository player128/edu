<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
}