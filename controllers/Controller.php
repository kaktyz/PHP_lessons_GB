<?php

namespace app\controllers;

use app\interfaces\IRenderer;

abstract class Controller
{
    public $action;
    private $defaultAction = 'index';
    private $layout = 'main';
    public $useLayout = true;
    private $renderer;

    /**
     * Controller constructor.
     * @param $renderer
     */
    public function __construct(IRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function run($action = null)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404";
        }
    }

    protected function render($template, $params = [])
    {
//        var_dump($template);//card
//        var_dump($params);//данные о продуктах
        if ($this->useLayout) {
            $content = $this->renderTemplate($template, $params);
            return $this->renderTemplate("layouts/{$this->layout}", ['content' => $content]);
        }
        return $this->renderTemplate($template, $params);
    }

    protected function renderTemplate($template, $params = [])
    {
//        var_dump($this->renderer);//object(app\services\TemplateRenderer)
        return $this->renderer->render($template, $params);
    }
}