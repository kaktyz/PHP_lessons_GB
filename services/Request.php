<?php
namespace app\services;

//use app\controllers\ProductController;

class Request
{
    private $actionName;
    private $controllerName = 'index';
    private $params;
    private $requestString;

    public function __construct()
    {
        $this->requestString = $_SERVER['REQUEST_URI'];
        $this->parseRequest();
    }

    /**
     * Рзабмвает URI на акшены, контроллеоы и параметры товара, возвращает данные в params, actionName и controllerName
     * соответственно.
     */
    public function parseRequest(){
        $pattern = "|[/](?P<public>\w+)[/](?P<controller>[\w]+)[/]?(?P<action>\w+)?[/]?[?]?(?P<patternParams>.*)|";
        if(preg_match_all($pattern, $this->requestString, $match)){
            $this->controllerName = $match['controller'][0];
            $this->actionName = $match['action'][0];
            $this->params =  $match['patternParams'][0];
//          TODO: Додумать регулярное выражение!
//            $this->params = explode("&", $match['patternParams'][0]);
//            echo "<hr>";
//            var_dump($this->params);
//            echo "<hr>";
//            foreach ($this->params as $value){
//                $reg = "|[\w+][\W]([\w+])|";
//                preg_match_all($reg, $value, $matchForeach);
//                var_dump($matchForeach);
//            }
            $this->params = preg_replace("/[^0-9]/", '', $this->params);
        }else{
            $this->actionName = 'cart';
        }

    }

    /**
     * @return string возвращает данные из controllerName
     */
    public function getControllerName(){
        return $this->controllerName;
    }

    /**
     * @return mixed возвращает actionName
     */
    public function getActionName(){
        return $this->actionName;
    }

    /**
     * @return mixed возвращает params
     */
    public function getParams(){
        return $this->params;
    }
}