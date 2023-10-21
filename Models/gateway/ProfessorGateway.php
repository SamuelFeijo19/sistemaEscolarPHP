    <?php
    
        class ProfessorGateway {
            private static $conn;

            //Método setConnection()
            public static function setConnection (PDO $conn) {
                self::$conn = $conn;
            }//Fim do método setConnection()

            //Método find() - buscar
            public function find ($id, $class = 'stdClass') {
                $sql = "SELECT * FROM professor WHERE id = '$id'";
                $result = self::$conn->query($sql);
                //fetchObject() retornar a próxima linha (registro) como um objeto
                return $result->fetchObject($class);
            }//Fim do método find()

            //Método all()
            public function all ($filter, $class = 'stdClass') {
                $sql = "SELECT * FROM professor ";
                if ($filter) {
                    $sql .= "WHERE $filter";
                }
                // print "$sql <br>\n";
                $result = self::$conn->query($sql);
                return $result->fetchAll(PDO::FETCH_CLASS, $class); //retorna um array de objetos
            }//Fim do método all()

            //Método delete()
            public function delete ($id) {
                $sql = "DELETE FROM professor WHERE id = '$id'";
                print "$sql <br>\n";
                return self::$conn->query($sql);
            }//Fim do método delete()

            //Método save()

            public function save($data) {
                if (empty($data->id)) { //Id não localizado - Insere
                    $id = $this->getLastId() + 1;
                    $sql = "INSERT INTO professor 
                    (id, nomeProfessor, matriculaProfessor, escolaridadeProfessor, especialidadeProfessor) VALUES ('{$id}', '{$data->nomeProfessor}', 
                    '{$data->matriculaProfessor}', '{$data->escolaridadeProfessor}', '{$data->especialidadeProfessor}')"; 
                }   else { //Id localizado - Atualiza
                    $sql = "UPDATE professor SET 
                    nomeProfessor = '{$data->nomeProfessor}', 
                    matriculaProfessor = '{$data->matriculaProfessor}',
                    escolaridadeProfessor = '{$data->matriculaProfessor}',
                    especialidadeProfessor = '{$data->especialidadeProfessor}' WHERE 
                    id = '{$data->id}'";
                }
            
                self::$conn->exec($sql);
            }

            //Método getLastId()
            public function getLastId() {
                $sql = "SELECT max(id) as max FROM professor";
                $result = self::$conn->query($sql);
                $data = $result->fetch(PDO::FETCH_OBJ);
                return $data->max;
            }//Fim do método getLastId()
            
        }
    ?>