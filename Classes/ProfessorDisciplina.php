<?php
class ProfessorDisciplina {
    private static $conn;
    private $data;

    public static function setConnection(PDO $conn) {
        self::$conn = $conn;
        ProfessorDisciplina::setConnection($conn);

    }

    public function __set($prop, $value) {
        $this->data[$prop] = $value;
    }

    public function __get($prop) {
        return $this->data[$prop];
    }
    public static function find($id) {
        $pdg = new ProfessorDisciplina;
        return $pdg->find($id, 'ProfessorDisciplina');
    }//Fim do método find()

    //Método all()
    public static function all($filter = '') {
        $pdg = new ProfessorDisciplina;
        return $pdg->all($filter, 'ProfessorDisciplina');
    }//Fi

    public function save() {
        $sql = "INSERT INTO ProfessorDisciplina (codigoCurso, codigoDisciplina) VALUES (:codigoProfessor, :codigoDisciplina)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(':codigoCurso', $this->codigoCurso, PDO::PARAM_INT);
        $stmt->bindValue(':codigoDisciplina', $this->codigoDisciplina, PDO::PARAM_INT);
        $stmt->execute();
    }
}

?>