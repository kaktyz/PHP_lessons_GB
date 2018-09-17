<?php
namespace app\models;


use app\services\Db;

abstract class Repository
{
    public function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return static::getDb()->queryObject($sql, [':id' => $id], static::getEntityClass());
    }

    public function getAll()
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return static::getDb()->queryAll($sql);
    }

    public function delete(DataEntity $entity)
    {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return static::getDb()->execute($sql, [':id' => $entity->id]);
    }

    private function insert(DataEntity $entity)
    {
        $params = [];
        $columns = [];
        foreach ($entity as $key => $value) {
            $params[":$key"] = $value;
            $columns[] = $key;
        }

        $columns = implode(", ", $columns);
        $placeholders = implode(", ", array_keys($params));

        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$placeholders})";
        static::getDb()->execute($sql, $params);
    }

    private function update(DataEntity $entity){}

    /**
     * @return Db
     */
    public static function getDb()
    {
        return Db::getInstance();
    }

    abstract static public function getTableName();

    abstract static public function getEntityClass();
}