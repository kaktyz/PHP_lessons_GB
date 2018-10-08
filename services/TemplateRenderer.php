<?php
namespace app\services;
use app\interfaces\IRenderer;

class TemplateRenderer implements IRenderer
{
    public function render($template, $params = [])
    {
        if (is_null($params) || is_null($template)){
            $templatePath = TEMPLATES_DIR . "main.php";
            include $templatePath;
        }else{
            ob_start();
            extract($params);
            $templatePath = TEMPLATES_DIR . $template . ".php";
            include $templatePath;
            return ob_get_clean();
        }
    }
}