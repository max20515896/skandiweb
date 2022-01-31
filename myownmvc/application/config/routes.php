<?php

use application\core\Route;

return [
    new Route('/', 'main', 'show'),
    new Route('/delete', 'main', 'delete'),
    new Route('/addproduct', 'add', 'show'),
    new Route('addproduct/save', 'add', 'save')
];