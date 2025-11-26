<?php
class DB
{
    private static $instance = null;

    public static function connect()
    {
        if (!self::$instance) {
            $host = "localhost";
            $db   = "national_state_city";
            $user = "national_andy";
            $pass = "hPl@ptop"; // default XAMPP password

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
