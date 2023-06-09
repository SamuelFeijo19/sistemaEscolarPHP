<?php
    //Mapeamento Objeto-Relacional
    //Interface que mantém acesso transparente com o banco de dados
    //Uma forma simples é ter uma classe para manipular o acesso a cada tabela do banco
    //de dados, o que chamamos de Gateway - se comunica com recursos externos escondendo
    //os detalhes
    //A aplicação só precisa conhecer a interface para manipular as informações
    //O acesso aos dados, via SQL, fica nessa camada

    //Apenas a instância dessa classe irá manipular cada tabela do banco de dados
    //Chamamos de Design Pattern Table Data Gateway
    //A instância não armazena informações

    //Utilizando Table Data Gateway - ponte entre o objeto de negócios e o banco de dados
    
    //Classe ProdutoGateway
    class BolsaGateway {
        //pode ser acessado diretamente sem a necessidade de que você instancie 
        //a classe onde ele foi declarado
        private static $conn;

        //Método setConnection()
        //Implementa uma injeção de dependência
        //self apont para a classe em si, para membros estáticos
        //$this aponta para objeto
        public static function setConnection (PDO $conn) {
            self::$conn = $conn; //::chamando um atributo estático de uma classe 
        }//Fim do método setConnection()

        //Método find() - buscar
        public function find ($id, $class = 'stdClass') {
            $sql = "SELECT * FROM bolsa WHERE id = '$id'";
            print "$sql <br>\n";
            $result = self::$conn->query($sql);
            //fetchObject() retornar a próxima linha (registro) como um objeto
            return $result->fetchObject($class);
        }//Fim do método find()

        //Método all()
        public function all ($filter, $class = 'stdClass') {
            $sql = "SELECT * FROM bolsa ";
            if ($filter) {
                $sql .= "WHERE $filter";
            }
            // print "$sql <br>\n";
            $result = self::$conn->query($sql);
            return $result->fetchAll(PDO::FETCH_CLASS, $class); //retorna um array de objetos
        }//Fim do método all()

        //Método delete()
        public function delete ($id) {
            $sql = "DELETE FROM bolsa WHERE id = '$id'";
            print "$sql <br>\n";
            return self::$conn->query($sql);
        }//Fim do método delete()

        //Método save()
        public function save($data) {
            if (empty($data->id)) {
                $id = $this->getLastId() + 1;
                $sql = "INSERT INTO bolsa 
                (id, nomeBolsa, descricaoBolsa, valorBolsa ) VALUES ('{$id}', '{$data->nomeBolsa}', 
                '{$data->descricaoBolsa}', '{$data->valorBolsa}')";
            } else {
                $sql = "UPDATE bolsa SET 
                nomeBolsa = '{$data->nomeBolsa}', 
                descricaoBolsa = '{$data->descricaoBolsa}',
                valorBolsa = '{$data->valorBolsa}'
                WHERE 
                id = '{$data->id}'";
            }
        
            self::$conn->exec($sql);
        
        }
        //Fim do método save()

        //Método getLastId()
        public function getLastId() {
            $sql = "SELECT max(id) as max FROM bolsa";
            $result = self::$conn->query($sql);
            $data = $result->fetch(PDO::FETCH_OBJ);
            return $data->max;
        }//Fim do método getLastId()
        
    }//Fim da clase ProdutoGateway
?>