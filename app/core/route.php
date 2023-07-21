<?php
namespace Edu\app\core;

class Route
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[2]) )
		{	
			$controller_name = $routes[2];
		}
		
		// // получаем имя экшена
		// if ( !empty($routes[3]) )
		// {
		// 	$action_name = $routes[3];
		// }

		if ( !empty($routes[3]) && $routes[3] == 'param') 
		{
			if (!empty($routes[4]))
			{
				$param = $routes[4];
			}
		}

		// добавляем префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.ucfirst($controller_name);
		$action_name = 'action_'.$action_name;
		$controller_name = "Edu\\app\\controllers\\".$controller_name;
		
		if(class_exists($controller_name))
		{
			//Проверяем объявлен ли класс контроллера
		}
		else
		{
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
			echo "Класс $controller_name не найден";
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;

		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			if (!empty($param))
			{
				$controller->$action($param);
			}
			else $controller->$action();
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			//Route::ErrorPage404();
		}
	
	}
	
	static function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}