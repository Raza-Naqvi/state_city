<?php
require_once __DIR__ . "/../repositories/CityRepository.php";

class CityService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new CityRepository();
    }

    public function createCity($name, $state, $country)
    {
        if (!$name || !$state || !$country) throw new Exception("City name, state, and country are required");
        return $this->repo->create($name, $state, $country);
    }

    public function getCities()
    {
        return $this->repo->getAll();
    }
}
