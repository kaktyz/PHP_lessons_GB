<?php

namespace app\models\repositories;


use app\models\Product;
use app\models\Repository;

class ProductRepository extends Repository
{
    public static function getTableName()
    {
        return 'product';
    }

    static public function getEntityClass()
    {
        return Product::class;
    }


}