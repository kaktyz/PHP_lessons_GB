<?php
namespace app\controllers;

use app\models\repositories\ProductRepository;
use app\services\Request;

class ProductController extends Controller
{
    public function actionIndex()
    {
        echo "catalog";
    }

    public function actionCard()
    {
       $this->useLayout = false;//поменять на привалт 12 строку controller.php
       $id = (new Request)->getParams();
       $product = (new ProductRepository())->getOne($id);

       echo $this->render($this->action, ['product' => $product]);
    }
}