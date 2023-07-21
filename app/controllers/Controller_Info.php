<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Info extends Controller
{
	function action_index($param = null)
	{
        if ($param != null) $this->view->generate('info_view.php', 'template_view.php', $param);
		else $this->view->generate('info_view.php', 'template_view.php');
	}
}