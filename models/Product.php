<?php
namespace app\models;

class Product extends DbModel
{
    public $id;
    public $name;
    public $description;
    public $price;
//    public $producer;
    public $img;

    /**
     * Product constructor.
     * @param $id
     * @param $img
     * @param $name
     * @param $description
     * @param $price
     * @param $producer
     */
    public function __construct($id = null, $img = null, $name = null, $description = null, $price = null, $producer = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
//        $this->producer = $producer;
    }


    public static function getTableName():string
    {
       return 'products';
    }




}