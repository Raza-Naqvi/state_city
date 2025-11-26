<?php
require_once __DIR__ . "/../repositories/StateRepository.php";

class StateRepository
{

    public function create($name, $country)
    {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO states (name, country) VALUES (?, ?)");
        $stmt->execute([$name, $country]);
        return $db->lastInsertId();
    }

    public function getAll()
    {
        $db = DB::connect();
        $stmt = $db->query("SELECT name, country FROM states ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
