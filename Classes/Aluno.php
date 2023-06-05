<?php
    //Objeto de domínio -> simular uma aplicação
    //Classe Produto
    class Aluno {
        private static $conn;
        private $data;
        private $caracteristicas;

        //Método setConnection()
        public static function setConnection (PDO $conn) {
            self::$conn = $conn;
            AlunoGateway::setConnection($conn);
        }//Fim do método setConnection()

        //Método __set()
        //Método mágico
        public function __set($prop, $value) {
            $this->data[$prop] = $value;
        }//Fim do método __set()

        //Método __get()
        public function __get($prop) {
            return $this->data[$prop];
        }//Fim do método __get()

        //Método find()
        public static function find($id) {
            $pdg = new AlunoGateway;
            return $pdg->find($id, 'Aluno');
        }//Fim do método find()

        //Método all()
        public static function all($filter = '') {
            $pdg = new AlunoGateway;
            return $pdg->all($filter, 'Aluno');
        }//Fim do método all()

        //Método delete()
        public function delete() {
            $pdg = new AlunoGateway;
            return $pdg->delete($this->id);
        }//Fim do método delete()

        //Método save()
        public function save() {
            $pdg = new AlunoGateway;
            return $pdg->save((object)$this->data);
        }//Fim do método save()

        //Método getMargemLucro()
        // public function getMargemLucro() {
        //     return (($this->preco_venda - $this->preco_custo) / $this->preco_custo) * 100;
        // }//Fim do método getMargemLucro()
        
        //Método registrarCompra()
        // public function registrarCompra($custo, $quantidade) {
        //     $this->custo = $custo;
        //     $this->estoque += $quantidade;
        // }//Fim do método registrarCompra()

    }//Fim da classe Produto
?>