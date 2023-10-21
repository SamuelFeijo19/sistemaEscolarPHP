    <?php

        class DisciplinaGateway {

            private static $conn;

            //Método setConnection()
            public static function setConnection (PDO $conn) {
                self::$conn = $conn;
            }//Fim do método setConnection()

            //Método find() - buscar
            public function find ($id, $class = 'stdClass') {
                $sql = "SELECT * FROM disciplina WHERE id = '$id'";
                $result = self::$conn->query($sql);
                //fetchObject() retornar a próxima linha (registro) como um objeto
                return $result->fetchObject($class);
            }//Fim do método find()

            //Método all()
            public function all ($filter, $class = 'stdClass') {
                $sql = "SELECT * FROM disciplina ";
                if ($filter) {
                    $sql .= "WHERE $filter";
                }
                // print "$sql <br>\n";
                $result = self::$conn->query($sql);
                return $result->fetchAll(PDO::FETCH_CLASS, $class); //retorna um array de objetos
            }//Fim do método all()

            //Método delete()
            public function delete ($id) {
                $sql = "DELETE FROM disciplina WHERE id = '$id'";
                print "$sql <br>\n";
                return self::$conn->query($sql);
            }//Fim do método delete()

            //Método save()
            public function save ($data) {
                if (empty($data->id)) { //Id não localizado - Insere
                    $id = $this->getLastId() + 1;
                    $sql = "INSERT INTO disciplina 
                    (id, nomeDisciplina, cargaHorariaDisciplina) VALUES ('{$id}', '{$data->nomeDisciplina}', 
                    '{$data->cargaHorariaDisciplina}')"; 
                }
                else { //Id localizado - Atualiza
                    $sql = "UPDATE disciplina SET 
                    nomeDisciplina = '{$data->nomeDisciplina}', 
                    cargaHorariaDisciplina = '{$data->cargaHorariaDisciplina}' WHERE 
                    id = '{$data->id}'";
                }
                print "$sql <br>\n";
                return self::$conn->exec($sql); //executa a instrução SQL
            }//Fim do método save()

            //Método getLastId()
            public function getLastId() {
                $sql = "SELECT max(id) as max FROM disciplina";
                $result = self::$conn->query($sql);
                $data = $result->fetch(PDO::FETCH_OBJ);
                return $data->max;
            }//Fim do método getLastId()
            
        }
    ?>