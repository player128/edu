<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Reg extends Controller
{
	function action_index()
	{	
		$this->view->generate('reg_view.php', 'template_view.php');
	}
}