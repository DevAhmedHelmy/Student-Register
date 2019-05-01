<?php
namespace App\Models;

class DoctorModel extends AbstractModel
{
    //    tbl content
    public $id;
    public $name;
    public $email;
    public $password;
    public $degree;
    public $address;
    public $birthDate;
    public $phone;
    public $register_time;
    protected static $tableName = 'doctors';
    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'name'      => self::DATA_TYPE_STR,
        'email'      => self::DATA_TYPE_STR,
        'password'      => self::DATA_TYPE_STR,
        'degree'      => self::DATA_TYPE_STR,
        'address'   => self::DATA_TYPE_STR,
        'birthDate'       => self::DATA_TYPE_DECIMAL,
        'phone'      => self::DATA_TYPE_STR,
        'register_time'      => self::DATA_TYPE_STR
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