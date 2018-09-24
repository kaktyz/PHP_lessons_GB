<?php
namespace app\controllers;

use app\models\Product;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    public function actionIndex()
    {
        echo "catalog";
    }

    public function actionCard()
    {
       $this->useLayout = false;//поменять на привалт 12 строку controller.php
       $id = $_GET['id'];
       $product = (new ProductRepository())->getOne($id);
       echo $this->render('card', ['product' => $product]);
    }
}