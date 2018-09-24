<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/main.php";
//include ROOT_DIR . "services/Autoloader.php";
include VENDOR_DIR . "autoload.php";

//spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

//TODO: Разобраться с ФАТАЛКОЙ!!

$request = new \app\services\Request();

$controllerName = $request->getControllerName();
echo "controllerName";
var_dump($controllerName);
echo '<hr>';
$action = $request->getActionName();
echo "action";
var_dump($action);
echo '<hr>';
$controllerClass = CONTROLLERS_NAMESPACE . "\\" . ucfirst($controllerName) ."Controller";
//echo "ContCLas";
//var_dump($controllerClass);
//echo '<hr>';
if(class_exists($controllerClass)){
    $controller = new $controllerClass(new TemplateRenderer());
    $controller->run($action);
}