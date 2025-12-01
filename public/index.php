<?php
header("Content-Type: application/json");

require_once __DIR__ . "/../controllers/StateController.php";
require_once __DIR__ . "/../controllers/CityController.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri == "/state/create" && $method == "POST") {
    (new StateController())->create();
} elseif ($uri == "/city/create" && $method == "POST") {
    (new CityController())->create();
} elseif ($uri == "/states" && $method == "GET") {
    (new StateController())->getStatesWithCities();
} elseif ($uri == "/states/by-country" && $method == "GET") {
    (new StateController())->getStatesByCountry();
} elseif ($uri === "/cities/by-state" && $method === "GET") {
    (new CityController())->getCitiesByState();
} else {
    echo json_encode(["success" => false, "error" => "Route not found"]);
}
