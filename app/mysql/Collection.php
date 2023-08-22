<?php
namespace Edu\app\mysql;

class Collection 
{
    public $tableName;
    public $modelName;
    public function __construct($model)
	{
        $this->modelName = "\\Edu\\app\\models\\Model_$model";
        $this->tableName = lcfirst($model);
	}

    function get()
    {
        $mysql = new Mysql();
        $query = "SELECT * FROM `$this->tableName`";
        $result = $mysql->query($query);

        if (!$result) {
            return false;
        }

        if ($result->num_rows === 0) {
            // echo 'Неверный логин или пароль!';
            return false;
        }

        $data = [];
		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $ob = new $this->modelName($row);
			$data = array_merge($data, [$ob]);
		}

        return $data;
    }

    function set($data)
    {
        
    }
}
