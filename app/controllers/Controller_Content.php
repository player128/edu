<?php
namespace Edu\app\controllers;

use \Edu\app\core\Controller;
use \Edu\app\models\Model_Content;
class Controller_Content extends Controller
{
    function action_index()
    {
        $this->action_list();
    }

	function action_file($param = null)
	{	
        $model = new Model_Content();
        $data = $model->get_file($param);
        if ($data) $this->view->generate('content_view.php', 'template_view.php', $data);
        else $this->view->generate('content_view.php', 'template_view.php');
	}

    function action_list($param = null)
    {
        $model = new Model_Content();
        $data = $model->get_list($param);
        if ($data) $this->view->generate('content_view.php', 'template_view.php', $data);
        else $this->view->generate('content_view.php', 'template_view.php');
    }
}