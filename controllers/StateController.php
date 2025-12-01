<?php
require_once __DIR__ . "/../services/StateService.php";
require_once __DIR__ . "/../services/CityService.php";
require_once __DIR__ . "/CityController.php";

class StateController
{
    public function create()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        if (empty($data['name']) || empty($data['country'])) {
            echo json_encode(["success" => false, "error" => "Name and Country are required"]);
            return;
        }

        try {
            $service = new StateService();
            $id = $service->createState($data['name'], $data['country']);
            echo json_encode(["success" => true, "state_id" => $id]);
        } catch (Exception $e) {
            echo json_encode(["success" => false, "error" => $e->getMessage()]);
        }
    }

    public function getStatesWithCities()
    {
        try {
            $stateService = new StateService();
            $cityService = new CityService();

            $states = $stateService->getStates();
            $cities = $cityService->getCities();

            $result = [];
            foreach ($states as $state) {
                $resultState = [
                    "name" => $state["name"],
                    "country" => $state["country"],
                    "cities" => []
                ];
                foreach ($cities as $city) {
                    if ($city["state"] == $state["name"] && $city["country"] == $state["country"]) {
                        $resultState["cities"][] = [
                            "name" => $city["name"],
                            "state" => $city["state"],
                            "country" => $city["country"]
                        ];
                    }
                }
                $result[] = $resultState;
            }

            echo json_encode(["success" => true, "data" => $result]);
        } catch (Exception $e) {
            echo json_encode(["success" => false, "error" => $e->getMessage()]);
        }
    }

    public function getStatesByCountry()
    {
        try {
            if (!isset($_GET['country']) || empty($_GET['country'])) {
                echo json_encode([
                    "success" => false,
                    "error" => "country param is required"
                ]);
                return;
            }

            $country = strtolower($_GET['country']);

            $stateService = new StateService();
            $states = $stateService->getStates();

            $result = [];

            foreach ($states as $state) {
                if (strtolower($state["country"]) === $country) {
                    $result[] = [
                        "name" => $state["name"],
                        "country" => $state["country"]
                    ];
                }
            }

            echo json_encode([
                "success" => true,
                "country" => $_GET['country'],
                "states" => $result
            ]);
        } catch (Exception $e) {
            echo json_encode([
                "success" => false,
                "error" => $e->getMessage()
            ]);
        }
    }
}
