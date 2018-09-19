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
    public static function getOne(int $id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, [':id' => $id], get_called_class());
    }

    /**
     * TODO доделать воззвращение объектов
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
            /**TODO решшить проблемы со служебнными полями что такое протектед? */
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

    /**
     * TODO сохранять ттолько иззменненнные поля создавать 2 массива, один был, другой который стал и проверять их
     */

    //"UPDATE {$tableName} SET img=\"{$img}\", name=\"{$name}\", description=\"{$description}\", price=\"{$price}\" WHERE id=\"{$id}\"
    public function update()
    {
        $params = [];
        $idOfParam = NULL;

        foreach ($this as $key => $value){
            /**TODO решшить проблемы со служебнными полями 2 */
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

    /** TODO  функцию сохранения */
    public function save(){

    }
}
