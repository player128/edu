<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Video extends Controller
{
	function action_index($param = null)
	{	
		$this->view->generate('video_view.php', 'template_view.php');
	}
}