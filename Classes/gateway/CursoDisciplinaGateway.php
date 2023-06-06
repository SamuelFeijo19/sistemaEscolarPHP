<?php

class CursoDisciplinaGateway {
    private static $conn;

    public static function setConnection(PDO $conn) {
        self::$conn = $conn;
    }
}
?>
