<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    private $path;
    protected $view;
    protected $model;

    public function __construct($controller, $action)
    {
        $this->path = "application/views/$controller/$action.php";
        $this->view = new View($this->path);
        $this->model = $this->loadModel($controller);
    }

    public function loadModel($name)
    {
        $path = 'application\models\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }
}