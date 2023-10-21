<?php
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\ProfessorDisciplinaGateway.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Professor.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Disciplina.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\ProfessorDisciplina.php";
require_once "../conexao/Conexao.php";

try {
    $conexao = new Conexao();
    $conn = $conexao->getConexao();
    
    ProfessorDisciplina::setConnection($conn);

    $codigoProfessor = $_POST['codigoProfessor'];
    $codigoDisciplina = $_POST['codigoDisciplina'];

    $ProfessorDisciplina = new ProfessorDisciplina();
    $ProfessorDisciplina->codigoProfessor = $codigoProfessor;
    $ProfessorDisciplina->codigoDisciplina = $codigoDisciplina;

    $ProfessorDisciplina->save();

    echo '<script>alert("Cadastrado realizado com sucesso!");';
    echo 'window.location.href = document.referrer;</script>';
} catch (Exception $e) {
    echo '<script>alert("Erro ao cadastrar: ' . $e->getMessage() . '");';
    echo 'window.location.href = document.referrer;</script>';
}
?>