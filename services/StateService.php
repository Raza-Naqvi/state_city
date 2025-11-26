<?php
require_once __DIR__ . "/../repositories/StateRepository.php";

class StateService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new StateRepository();
    }

    public function createState($name, $country)
    {
        if (!$name || !$country) throw new Exception("State name and country are required");
        return $this->repo->create($name, $country);
    }

    public function getStates()
    {
        return $this->repo->getAll();
    }
}
