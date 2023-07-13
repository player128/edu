<?php
namespace edu\app\controllers;

use \edu\app\core\Controller;
class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
}