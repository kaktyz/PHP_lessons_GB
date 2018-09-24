<?php
namespace app\services;

class Request
{
    private $actionName;
    private $controllerName;
    private $params;
    private $requestString;

    public function __construct()
    {
        $this->requestString = $_SERVER['REQUEST_URI'];
        $this->parseRequest();
    }

    public function parseRequest(){
        $pattern = "|[/](?P<public>\w+)[/](?P<controller>[\w]+)[/]?(?P<action>\w+)?[/]?[?]?(?P<patternParams>.*)|";
        if(preg_match_all($pattern, $this->requestString, $match)){
            $this->controllerName = $match['controller'][0];
            $this->actionName = $match['action'][0];
            $this->params = $_REQUEST;
        }
    }

    public function getControllerName(){
//        echo "controllerName";
//        var_dump($this->controllerName);
//        echo '<hr>';
        return $this->controllerName;
    }

    public function getActionName(){
//        echo "actionName";
//        var_dump($this->actionName);
//        echo '<hr>';
        return $this->actionName;
    }

    public function getParams(){
        return $this->params;
    }
}