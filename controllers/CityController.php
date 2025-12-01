<?php
require_once __DIR__ . "/../services/CityService.php";

class CityController
{
    private $service;

    public function __construct()
    {
        $this->service = new CityService();
    }

    public function create()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        if (empty($data['name']) || empty($data['state']) || empty($data['country'])) {
            echo json_encode(["success" => false, "error" => "Name, State, and Country are required"]);
            return;
        }

        try {
            $id = $this->service->createCity($data['name'], $data['state'], $data['country']);
            echo json_encode(["success" => true, "city_id" => $id]);
        } catch (Exception $e) {
            echo json_encode(["success" => false, "error" => $e->getMessage()]);
        }
    }

    public function getCitiesByState()
    {
        try {
            if (!isset($_GET['state']) || empty($_GET['state'])) {
                echo json_encode([
                    "success" => false,
                    "error" => "state param is required"
                ]);
                return;
            }

            $stateParam = strtolower($_GET['state']);

            $cities = $this->service->getCities();
            $result = [];

            foreach ($cities as $city) {
                if (strtolower($city['state']) === $stateParam) {
                    $result[] = [
                        "name" => $city['name'],
                        "state" => $city['state'],
                        "country" => $city['country']
                    ];
                }
            }

            echo json_encode([
                "success" => true,
                "state" => $_GET['state'],
                "cities" => $result
            ]);
        } catch (Exception $e) {
            echo json_encode([
                "success" => false,
                "error" => $e->getMessage()
            ]);
        }
    }
}
