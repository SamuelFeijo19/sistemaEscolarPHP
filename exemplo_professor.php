<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\ProfessorGateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Professor.php";
    $username = "root";
    $password = "root";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Professor::setConnection($conn);

        $professores = Professor::all(); //retorna todos os objetos da tabela
        
        $p1 = new Professor;
        $p1->nomeProfessor = $_POST['nome'];
        $p1->matriculaProfessor = $_POST['matricula'];
        $p1->escolaridadeProfessor = $_POST['escolaridade'];
        $p1->especialidadeProfessor = $_POST['especialidade'];

                // Adicionando características ao Professor
                $caracteristicas = [];
                for ($i = 0; $i < count($_POST['nomeCaracteristica']); $i++) {
                    $nome = $_POST['nomeCaracteristica'][$i];
                    $valor = $_POST['valor'][$i];
                    $caracteristicas[] = array("nome" => $nome, "valor" => $valor);
                }
                $p1->caracteristicas = $caracteristicas;
        
                $p1->save();
    } catch (Exception $e) {
        print $e->getMessage();
    }
?>