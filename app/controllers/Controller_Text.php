<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Text extends Controller
{
	function action_index($param = null)
	{	
        if ($param != null) $this->view->generate('text_view.php', 'template_view.php', $param);
		else $this->view->generate('text_view.php', 'template_view.php');
	}
}