<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
use \Edu\app\core\User;
class Controller_Content extends Controller
{
	function action_index()
	{	$user = new User('Slava', '555');
		$user->reg();
		$this->view->generate('content_view.php', 'template_view.php');
	}
}