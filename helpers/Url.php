<?php
/**
 * Created by PhpStorm.
 * User: poluyanov
 * Date: 08.12.2017
 * Time: 13:41
 */

namespace app\helpers;


class Url
{
    protected $root = "/index.php";

    public function generate($controller = null, $action = null, $params = [])
    {
        $paramsPieces = [];
        if($controller){
            $params['c'] = $controller;
        }
        if($action){
            $params['a'] = $action;
        }
        foreach ($params as $key => $val){
            $paramsPieces[] = "{$key}={$val}";
        }

        $requestString = implode("&", $paramsPieces);
        return "{$this->root}?{$requestString}";
    }

}