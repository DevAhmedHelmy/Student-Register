<?php
namespace App\Models;
class OutlayModel extends AbstractModel
{
//    tbl content
    public $outlay_id;
    public $outlay;
    public $student_id;
    protected static $tableName = 'outlay';
    protected static $tableSchema = array(
        'outlay_id'            => self::DATA_TYPE_INT,
        'outlay'      => self::DATA_TYPE_STR,
        'student_id'      => self::DATA_TYPE_INT,
    );
    protected static $primaryKey = 'outlay_id';

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function getTableName()
    {
        return self::$tableName;
    }

}