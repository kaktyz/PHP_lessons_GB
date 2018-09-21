<?php

namespace app\controllers;

use app\models\Product;

class BasketController extends Controller
{
    public function actionBasket()
    {
        $id = $_GET['id'];
        $product = Product::getOne($id);
        echo $this->render('basket', ['product' => $product]);
    }
}