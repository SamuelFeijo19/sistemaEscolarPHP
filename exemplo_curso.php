<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\Cursogateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Curso.php";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Curso::setConnection($conn);

        $Cursos = Curso::all(); //retorna todos os objetos da tabela
        
        $p1 = new Curso;
        $p1->nomeCurso = $_POST['nomeCurso'];
        $p1->cargaHorariaCurso = $_POST['cargaHorariaCurso'];
        $p1->save();

    } catch (Exception $e) {
        print $e->getMessage();
    }
?>