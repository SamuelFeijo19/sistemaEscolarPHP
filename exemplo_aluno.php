<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\AlunoGateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Aluno.php";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Aluno::setConnection($conn);

        $alunos = Aluno::all(); //retorna todos os objetos da tabela
        
        $p1 = new Aluno;
        $p1->nomeAluno = $_POST['nome'];
        $p1->matriculaAluno = $_POST['matricula'];
        $p1->save();

    } catch (Exception $e) {
        print $e->getMessage();
    }
?>