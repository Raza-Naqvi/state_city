<?php
header("Content-Type: application/json");

require_once __DIR__ . "/../controllers/StateController.php";
require_once __DIR__ . "/../controllers/CityController.php";

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($uri == "/state/create" && $method == "POST") {
    (new StateController())->create();
} elseif ($uri == "/city/create" && $method == "POST") {
    (new CityController())->create();
} elseif ($uri == "/states" && $method == "GET") {
    (new StateController())->getStatesWithCities();
} else {
    echo json_encode(["success" => false, "error" => "Route not found"]);
}
