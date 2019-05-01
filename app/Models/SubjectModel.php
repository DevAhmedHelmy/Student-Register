<?php
namespace App\Models;
class SubjectModel extends AbstractModel
{
//    tbl content
    public $sub_id;
    public $sub_name;
    public $doctor_id;
    protected static $tableName = 'subjects';
    protected static $tableSchema = array(
        'sub_id'            => self::DATA_TYPE_INT,
        'sub_name'      => self::DATA_TYPE_STR,
        'doctor_id'      => self::DATA_TYPE_INT,
    );
    protected static $primaryKey = 'sub_id';

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function getTableName()
    {
        return self::$tableName;
    }

}