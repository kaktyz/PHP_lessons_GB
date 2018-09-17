<?php


namespace app\controllers;


use app\models\Product;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    public function actionCard()
    {
       // $this->useLayout = false;
        $id = $_GET['id'];
        /** @var Product $product */

        $product = (new ProductRepository())->getOne($id);
        echo $this->render("card", ['product' => $product]);
    }

    public function actionIndex(){
        echo "catalog";
    }


}