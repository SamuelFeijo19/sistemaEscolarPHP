<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\DisciplinaGateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Disciplina.php";
    $username = "root";
    $password = "root";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Disciplina::setConnection($conn);

        $disciplinas = Disciplina::all(); //retorna todos os objetos da tabela
        
        $p1 = new Disciplina;
        $p1->nomeDisciplina = $_POST['nomeDisciplina'];
        $p1->cargaHorariaDisciplina = $_POST['cargaHorariaDisciplina'];
        $p1->save();

    } catch (Exception $e) { 
        print $e->getMessage();
    }
?>