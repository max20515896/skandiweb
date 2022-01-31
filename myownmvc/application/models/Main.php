<?php

namespace application\models;

use application\core\Model;

class Main extends Model{

    public function getProducts($rows)
    {
        $result = $this->db->getByRows($rows);
        return $result;
    }

    public function deleteProducts($ids)
    {
        $this->db->massDelete($ids);
    }
}