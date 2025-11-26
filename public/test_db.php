<?php
require_once  '../config/db.php';

try {
    $db = DB::connect();
    echo "Database connected successfully!";
} catch (Exception $e) {
    echo "Database connection failed: " . $e->getMessage();
}
