<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{

    public function show()
    {
        $data = $this->model->getProducts('id, sku, name, price, property, value');
        $btns = [
            ['name' => 'ADD', 'uri' => '/addproduct'],
            ['name' => 'MASS DELETE', 'uri' => '#']
        ];
        $this->view->render('Product List', $btns, $data);
    }

    public function delete()
    {
        if (isset($_POST['item']) && !empty($_POST['item'])) {
            $ids = $_POST['item'];
            $ids = implode(',', $ids);

            $this->model->deleteProducts($ids);
        }

        header('Location: /');
        // $this->model->deleteProducts();
    }
}