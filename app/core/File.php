<?php
namespace Edu\app\core;

class File 
{
	function __construct()
	{
	}
	
	function loadScript($folder)
	{
		global $host;
		$dir = "C:/xampp/htdocs/edu/scripts/$folder";
		/*
		Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
		*/
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file == '.' || $file == '..') continue;
					echo "<script defer src='http://$host/edu/scripts/$folder/$file'></script>";
				}
				closedir($dh);
			}
		}
	}

	function loadStyle($folder)
	{
		global $host;
		$dir = "C:/xampp/htdocs/edu/scripts/$folder";
		/*
		Подумать над очерденостью загрузки скриптов, чтобы не возникали ошибки undefined
		*/
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file == '.' || $file == '..') continue;
					echo "<link  href='http://$host/edu/css/$folder/$file'></link>";
				}
				closedir($dh);
			}
		}
	}
}