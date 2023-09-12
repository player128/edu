<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Chat extends Controller
{
	function action_index($param = null)
	{	
		$this->view->generate('chat_view.php', 'template_view.php');
	}
}