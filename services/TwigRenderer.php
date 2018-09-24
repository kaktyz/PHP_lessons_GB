<?php


namespace app\services;
use app\interfaces\IRenderer;

class TwigRenderer implements IRenderer
{
    public function render($template, $params = [])
    {
        $loader = new \Twig_Loader_Filesystem(TEMPLATES_DIR . "twig");
        $twig = new \Twig_Environment($loader);

        $template .= ".twig";
        return $twig->render($template, $params);
    }
}