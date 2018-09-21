<?php
namespace app\models;

class Product extends DbModel
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $img;

    /**
     * Product constructor.
     * @param $id
     * @param $img
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($id = null, $img = null, $name = null, $description = null, $price = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

    }

    public static function getTableName():string
    {
       return 'products';
    }
}