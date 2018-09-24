<?php
namespace app\models\repositories;

use app\models\entityes\DataEntity;
use app\services\Db;

    abstract class Repository
{
    protected $db;

    function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getOne(int $id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryObject($sql, [':id' => $id], $this->getEntityClass());
    }

    public function getAll(): array
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    // TODO: вставить delete and insert

    public function delete(DataEntity $entity)
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return $this->db->execute($sql, [":id" => $entity->id]);
    }

    public function insert(DataEntity $entity)
    {
        $params = [];
        $columns = [];

        foreach ($entity as $key => $value){
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
        $entity->id = $this->db->lastInsertId();
    }

    abstract public function getTableName(): string ;

    abstract public function getEntityClass(): string ;
}