<?php

namespace application\controllers;

use application\core\Controller;

class AddController extends Controller
{

    public function show()
    {
        $data = [];
        $btns = [
            ['name' => 'Save', 'uri' => '/addproduct/save'],
            ['name' => 'Cancel', 'uri' => '/']
        ];
        $this->view->render('Product Add', $btns, $data);
    }
}