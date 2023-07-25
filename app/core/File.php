<?php
namespace Edu\app\core;

class File 
{
	function __construct()
	{
	}
	
	function loadScript($folder)
	{
		$dir = "C:/xampp/htdocs/edu/scripts/$folder";
		/*
		Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
		*/
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file == '.' || $file == '..') continue;
					echo "<script defer src='http://192.168.0.104:80/edu/scripts/$folder/$file'></script>";
				}
				closedir($dh);
			}
		}
	}

	function loadStyle($folder)
	{
		$dir = "C:/xampp/htdocs/edu/scripts/$folder";
		/*
		Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
		*/
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file == '.' || $file == '..') continue;
					echo "<link  href='http://192.168.0.104:80/edu/css/$folder/$file'></link>";
				}
				closedir($dh);
			}
		}
	}
}