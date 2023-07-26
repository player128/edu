<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
class Controller_Info extends Controller
{
	function action_index($param = null)
	{
        // if ($param != null) $this->view->generate('content_view.php', 'template_view.php', $param);
		// else $this->view->generate('content_view.php', 'template_view.php');
		$this->action_groups();
	}
	
	// Все категории первого уровня
	function action_groups()
	{
		$this->view->generate('info_view.php', 'template_view.php');
	}

	// Все элементы этой категории 
	function action_group($param = null)
	{
        if ($param != null) $this->view->generate('group_view.php', 'template_view.php', $param);
		else $this->view->generate('group_view.php', 'template_view.php');
	}
    // Элемент
	function action_elem($param = null)
	{
        if ($param != null) $this->view->generate('content_view.php', 'template_view.php', $param);
		else $this->view->generate('content_view.php', 'template_view.php');
	}
}