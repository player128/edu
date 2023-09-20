<?php
namespace Edu\app\models;

use \Edu\app\core\Model;

class Model_Content extends Model
{
    public function __construct()
    {

    }

	public function get_file($data)
	{	
        if (empty($data)) return false;
        global $host;

        $path = "http://$host/edu/contents/$data".".txt";
        $text = file_get_contents($path);
        return $text;
	}

    public function get_list($data)
    {
        global $host;
        $data = str_replace("/", "\\", $data);
        $path = "C:\\xampp\\htdocs\\edu\contents\\$data";

        if (!file_exists($path)) return false;
       
        $result['info'] = [];
        $result['list'] = true;

        if (is_dir($path)) {
            if ($dh = opendir($path)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file == '.' || $file == '..') continue;

                    $chekFile = $path."\\".$file;
                    $href = "http://$host/edu/content/";
                    $info = [];

                    if (is_file($chekFile)) {
                        $href .= "file/";
                    }
                    else {
                        $href .= "list/";
                    }

                    $file = str_replace(".txt", "", $file);

                    if  (empty($data)) {
                        $href .= $file;
                    }
                    else $href .= $data."/".$file;

                    $info['name'] = $file;
                    $info['href'] = $href;
                    $result['info'] = array_merge($result['info'], [$info]);
                }
                closedir($dh);
            }

            else return false;
        }
        else return false;

        return $result;
    }
}