<?php
class CursoDisciplina {
    private static $conn;
    private $data;

    public static function setConnection(PDO $conn) {
        self::$conn = $conn;
        CursoDisciplinaGateway::setConnection($conn);

    }

    public function __set($prop, $value) {
        $this->data[$prop] = $value;
    }

    public function __get($prop) {
        return $this->data[$prop];
    }
    public static function find($id) {
        $pdg = new CursoDisciplinaGateway;
        return $pdg->find($id, 'CursoDisciplina');
    }//Fim do método find()

    //Método all()
    public static function all($filter = '') {
        $pdg = new CursoDisciplinaGateway;
        return $pdg->all($filter, 'CursoDisciplina');
    }//Fi

    public function save() {
        $sql = "INSERT INTO CursoDisciplina (codigoCurso, codigoDisciplina) VALUES (:codigoCurso, :codigoDisciplina)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(':codigoCurso', $this->codigoCurso, PDO::PARAM_INT);
        $stmt->bindValue(':codigoDisciplina', $this->codigoDisciplina, PDO::PARAM_INT);
        $stmt->execute();
    }
}

?>