<?php
require_once 'Bolsa.php';

class BolsaPesquisa extends Bolsa {
    protected static $gateway;

    public static function setConnection(PDO $conn) {
        self::$conn = $conn;
        self::$gateway = new BolsaPesquisaGateway();
        self::$gateway->setConnection($conn);
    }

    public static function find($id) {
        return self::$gateway->find($id, 'BolsaPesquisa');
    }

    public static function all($filter = '') {
        return self::$gateway->all($filter, 'BolsaPesquisa');
    }

    public function delete() {
        return self::$gateway->delete($this->id);
    }

    public function save() {
        return self::$gateway->save((object) $this->data);
    }
}
?>