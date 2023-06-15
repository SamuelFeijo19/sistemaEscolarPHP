<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\AlunoGateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Aluno.php";
    $username = "root";
    $password = "root";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Aluno::setConnection($conn);

        $alunos = Aluno::all(); //retorna todos os objetos da tabela
        
        $p1 = new Aluno;
        $p1->nomeAluno = $_POST['nome'];
        $p1->matriculaAluno = $_POST['matricula'];

        // Adicionando características ao Aluno
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