<?php
namespace app\models;

use app\interfaces\IModel;
use app\services\Db;

abstract class Model implements IModel
{
    protected $db;

    /**
     * @param $db
     */
    public function  __construct()
    {
        $this->db = Db::getInstance();
    }
//TODO insert, update, delite
    public function getOne(int $id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, [':id' => $id]);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    /**
     * @param $img путь к картинке
     * @param $name название блюда
     * @param $description описание блюда
     * @param $price цена блюда
     */
    public function insertToDb($img, $name, $description, $price){
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (id, img, name, description, price) VALUES (NULL, NULL , \"{$name}\", NULL , \"{$price}\")";
        $this->db->execute($sql, [$img, $name, $description, $price]);
    echo "Данные успешно добалены в {$tableName}";
    }

    /**
     * @param $id номер стоки, которую нужно поменять
     * @param $img путь к картинке, который нужно поменять
     * @param $name название блюда, которое нужно поменять
     * @param $description описание блюда, которое нужно поменять
     * @param $price цена блюда, которую нужно поменять
     */
    public function updateDb($id, $img, $name, $description, $price){
        $tableName = $this->getTableName();
        $sql = "UPDATE {$tableName} SET img=\"{$img}\", name=\"{$name}\", description=\"{$description}\", price=\"{$price}\" WHERE id=\"{$id}\" ";
        $this->db->execute($sql, [$id, $img, $name, $description, $price]);
        echo "Данные успешно обновлены в {$tableName}";
    }
//DELETE FROM movies WHERE filmID =  :filmID

    /**
     * @param $id номер строки для удаления
     */
    public function deleteRowInDB($id){
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id=\"{$id}\" ";
        $this->db->execute($sql, [$id]);
        echo "Данные успешно удалены в {$tableName}";
    }
}