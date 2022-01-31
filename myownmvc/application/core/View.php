<?php

namespace application\core;

class View
{
    private $path;
    private $layout = 'default';

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function render($title, $btns, $data)
    {
        $btns = $btns;
        $title = $title;
        $data = $data;
        if (file_exists($this->path)) {
            ob_start();
            require $this->path;
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        } else {
            echo 'File not found';
        }
    }
}