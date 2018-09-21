<?php
namespace app\models;

use app\interfaces\IDbModel;
use app\services\Db;

abstract class DbModel implements IDbModel
{
    protected $db;

    /**
     * @param $db
     */
    public function  __construct()
    {
        $this->db = Db::getInstance();
    }

    /**
     * @param int $id
     * @return static
     */
    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, [':id' => $id], get_called_class());
    }

    /**
     * TODO доделать воззвращение объектов?? Что нужно сделать?
     * @return static[]
     */
    public static function getAll(): array
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public function delete()
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return $this->db->execute($sql, [":id" => $this->id]);
    }


    //INSERT INTO products(id, name,description...) VALUES (:id, :name......)
    public function insert()
    {
        $params = [];
        $columns = [];

        foreach ($this as $key => $value){
            /**TODO решшить проблемы со служебнными полями. Узнать что такое protected? Дабавить решение foreach в update() строка 81 */
            if($key == 'db'){
                continue;
            }

            $params[":{$key}"] = $value;
            $columns[] = "`{$key}`";
        }

        $columns = implode(", ", $columns);
        $placeholders = implode(", ", array_keys($params));

        $tableName = static::getTableName();
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$placeholders})";
        $this->db->execute($sql, $params);
        $this->id = $this->db->lastInsertId();
    }

    //"UPDATE {$tableName} SET img=\"{$img}\", name=\"{$name}\", description=\"{$description}\", price=\"{$price}\" WHERE id=\"{$id}\"

    /**
     * Ф-я апдейтит только измененные поля
     * @return bool
     */
    public function update()
    {
        $params = [];
        $idOfParam = NULL;

        foreach ($this as $key => $value){

            if($key == 'db'){
                continue;
            }else if ($key == 'id'){
                $idOfParam = $value;
                continue;
            }
            $params[] = "{$key} = \"{$value}\"";
        }
        $sqlParams = implode(", ", $params);
        $tableName = static::getTableName();
        $sql = "UPDATE {$tableName} SET {$sqlParams} WHERE id = {$idOfParam}";
        return $this->db->execute($sql, $params);
    }

    // TODO  функцию сохранения, которая сохраняет только измененные поля, т.е. создавать 2 массива, в одном сохранять исходные поля, в другой пришедшие и проверять их на совпадение

    /**
     * Сам объект орпделет вставить новый инсерт или проапдейтить понимая получили мы его через нью или через один из методов гет
     */
    public function save(){

    }
}
