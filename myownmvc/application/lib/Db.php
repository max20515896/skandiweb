<?php

namespace application\lib;
use PDO;
class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname='. $config['name'] . '', $config['user'], $config['password']);
    }

    public function getByRows($rows)
    {
        $query = 'SELECT ' .$rows . ' FROM products
        LEFT JOIN product_details ON product_details.product_id = products.id
        ORDER BY id';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function massDelete($ids)
    {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id IN ($ids)");
        $stmt->execute();
    }
}