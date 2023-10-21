<?php
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\CursoDisciplinaGateway.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Curso.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Disciplina.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\CursoDisciplina.php";
require_once "../conexao/Conexao.php";

try {
    $conexao = new Conexao();
    $conn = $conexao->getConexao();
    
    CursoDisciplina::setConnection($conn);

    $codigoCurso = $_POST['codigoCurso'];
    $codigoDisciplina = $_POST['codigoDisciplina'];

    $cursoDisciplina = new CursoDisciplina();
    $cursoDisciplina->codigoCurso = $codigoCurso;
    $cursoDisciplina->codigoDisciplina = $codigoDisciplina;

    $cursoDisciplina->save();

    echo '<script>alert("Cadastrado realizado com sucesso!");';
    echo 'window.location.href = document.referrer;</script>';
} 
    catch (Exception $e) {
        echo '<script>alert("Erro ao cadastrar: ' . $e->getMessage() . '");';
        echo 'window.location.href = document.referrer;</script>'; 
    }
?>