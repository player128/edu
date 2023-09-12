<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_New extends Controller
{
	function action_index($param = null)
	{	
		$this->view->generate('new_view.php', 'template_view.php');
	}
}