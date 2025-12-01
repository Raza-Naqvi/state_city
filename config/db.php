<?php
class DB
{
    private static $instance = null;

    public static function connect()
    {
        if (!self::$instance) {
            // for cPanel
            // $host = "localhost";
            // $db   = "national_state_city";
            // $user = "national_andy";
            // $pass = "hPl@ptop";

            // for local PC
            $host = "127.0.0.1";
            $db   = "country_state_city";
            $user = "root";
            $pass = "";

            try {
                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$db;charset=utf8",
                    $user,
                    $pass
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database Connection Failed: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
