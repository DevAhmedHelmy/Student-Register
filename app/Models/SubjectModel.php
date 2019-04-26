<?php
namespace App\Models;
class SubjectModel extends AbstractModel
{
//    tbl content
    public $id;
    public $sub_name;
    public $doctor_id;
    protected static $tableName = 'subjects';
    protected static $tableSchema = array(
        'sub_name'      => self::DATA_TYPE_STR,
        'doctor_id'      => self::DATA_TYPE_INT,
    );
    protected static $primaryKey = 'id';

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function getTableName()
    {
        return self::$tableName;
    }

}