<?php
namespace Edu\app\models;

use \Edu\app\core\Model;

class Model_Time extends Model
{
    public $tableName = 'time';
    public $fields = [
        'id' => '',
        'date' => '',
        'minute' => ''
    ];

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->fields[$key] = $data[$key];
        }
    }

	public function get_data()
	{	
	}
}