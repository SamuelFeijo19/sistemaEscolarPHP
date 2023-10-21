    <?php

        class AlunoGateway {

            private static $conn;

            public static function setConnection (PDO $conn) {
                self::$conn = $conn; 
            }

            //Método find() - buscar
            public function find ($id, $class = 'stdClass') {
                $sql = "SELECT * FROM aluno WHERE id = '$id'";
                print "$sql <br>\n";
                $result = self::$conn->query($sql);
                //fetchObject() retornar a próxima linha (registro) como um objeto
                return $result->fetchObject($class);
            }//Fim do método find()

            //Método all()
            public function all ($filter, $class = 'stdClass') {
                $sql = "SELECT * FROM aluno ";
                if ($filter) {
                    $sql .= "WHERE $filter";
                }
                // print "$sql <br>\n";
                $result = self::$conn->query($sql);
                return $result->fetchAll(PDO::FETCH_CLASS, $class); //retorna um array de objetos
            }//Fim do método all()

            //Método delete()
            public function delete ($id) {
                $sql = "DELETE FROM aluno WHERE id = '$id'";
                print "$sql <br>\n";
                return self::$conn->query($sql);
            }//Fim do método delete()

            //Método save()
            public function save($data) {
                if (empty($data->id)) {
                    $id = $this->getLastId() + 1;
                    $sql = "INSERT INTO aluno 
                    (id, nomeAluno, matriculaAluno) VALUES ('{$id}', '{$data->nomeAluno}', 
                    '{$data->matriculaAluno}')";
                } else {
                    $sql = "UPDATE aluno SET 
                    nomeAluno = '{$data->nomeAluno}', 
                    matriculaAluno = '{$data->matriculaAluno}' WHERE 
                    id = '{$data->id}'";
                }
            
                self::$conn->exec($sql);
            }
            //Fim do método save()

            //Método getLastId()
            public function getLastId() {
                $sql = "SELECT max(id) as max FROM aluno";
                $result = self::$conn->query($sql);
                $data = $result->fetch(PDO::FETCH_OBJ);
                return $data->max;
            }//Fim do método getLastId()
            
        }
    ?>