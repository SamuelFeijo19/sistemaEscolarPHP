    <?php

    class ProfessorDisciplinaGateway {
        private static $conn;

        public static function setConnection(PDO $conn) {
            self::$conn = $conn;
        }
        public function all ($filter, $class = 'stdClass') {
            $sql = "SELECT * FROM ProfessorDisciplina ";
            if ($filter) {
                $sql .= "WHERE $filter";
            }
            // print "$sql <br>\n";
            $result = self::$conn->query($sql);
            return $result->fetchAll(PDO::FETCH_CLASS, $class); 
        }//F
    }
    ?>
