<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Content extends Controller
{
	function action_index($param = null)
	{
		$this->view->generate('content_view.php', 'template_view.php');
	}
}