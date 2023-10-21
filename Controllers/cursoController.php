<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\Cursogateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Curso.php";
    require_once "../conexao/Conexao.php";

    try{
        $conexao = new Conexao();
        $conn = $conexao->getConexao();
        Curso::setConnection($conn);

        $Cursos = Curso::all(); 
        
        $p1 = new Curso;
        $p1->nomeCurso = $_POST['nomeCurso'];
        $p1->cargaHorariaCurso = $_POST['cargaHorariaCurso'];
        $p1->save();

        echo '<script>alert("Curso cadastrado com sucesso!");';
        echo 'window.location.href = document.referrer;</script>';
    } catch (Exception $e) {
        echo '<script>alert("Erro ao cadastrar Curso: ' . $e->getMessage() . '");';
        echo 'window.location.href = document.referrer;</script>';        
    }
?>