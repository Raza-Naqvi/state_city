<?php
require_once __DIR__ . "/../config/db.php";

class CityRepository
{
    private $db;

    public function __construct()
    {
        $this->db = DB::connect();
    }

    public function create($name, $state, $country)
    {
        $stmt = $this->db->prepare("INSERT INTO cities (name, state, country) VALUES (?, ?, ?)");
        $stmt->execute([$name, $state, $country]);
        return $this->db->lastInsertId();
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM cities");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
