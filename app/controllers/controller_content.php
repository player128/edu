<?php
namespace edu\app\controllers;

use \edu\app\core\Controller;
class Controller_Content extends Controller
{
	function action_index()
	{	
		$this->view->generate('content_view.php', 'template_view.php');
	}
}