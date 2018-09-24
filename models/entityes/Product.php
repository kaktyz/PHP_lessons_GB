<?php
namespace app\models\entityes;

/**
 * Class Product
 * @package app\models
 * @property $price
 */
class Product extends DataEntity
{
    protected $properties = [
        'id' => '',
        'name' => '',
        'description' => '',
        'price' =>  '',
        'producer' => '',
        'img' => '',
    ];

    function __get($name)
    {
        if(isset($this->properties[$name])){
            return $this->properties[$name];
        }
    }

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $price
     * @param $producer
     */
    public function __construct($id = null, $name = null, $description = null, $price = null, $producer = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->producer = $producer;
    }
}