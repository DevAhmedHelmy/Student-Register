<?php
namespace App\Models;
use App\Lib\Database\DatabaseHandler;
class LectureModel extends AbstractModel
{
//    tbl content
    public $lecture_id;
//    public $lecture_name;
    public $lecture_time;
    public $doctor_id;
    public $subject_id;
    protected static $tableName = 'lectures';
    protected static $tableSchema = array(
        'lecture_id'            => self::DATA_TYPE_INT,
//        'lecture_name'      => self::DATA_TYPE_STR,
        'doctor_id'      => self::DATA_TYPE_INT,
        'subject_id'      => self::DATA_TYPE_INT,
        'lecture_time'      => self::DATA_TYPE_STR
    );
    protected static $primaryKey = 'lecture_id';

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function getTableName()
    {
        return self::$tableName;
    }
    public static function getMultiJoin($tblname1,$tblname2,$id,$tblname3,$id2,$id3)
    {
        $sql = "SELECT * from $tblname1
                       INNER JOIN $tblname2 
                       ON $tblname1.$id=$tblname2.id 
                       INNER JOIN $tblname3 
                       ON $tblname1.$id2=$tblname3.$id3";
        $stmt = DatabaseHandler::factory()->prepare($sql);
        $stmt->execute();
        if(method_exists(get_called_class(), '__construct')) {
            $results = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, get_called_class(), array_keys(static::$tableSchema));
        } else {
            $results = $stmt->fetchAll(\PDO::FETCH_CLASS, get_called_class());
        }
        if ((is_array($results) && !empty($results))) {
            return new \ArrayIterator($results);
        };
        return false;
    }
}