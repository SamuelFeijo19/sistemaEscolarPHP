<?php

require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\ProfessorGateway.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Professor.php";
require_once "../conexao/Conexao.php";

try {
    $conexao = new Conexao();
    $conn = $conexao->getConexao();
    
    Professor::setConnection($conn);

    $professores = Professor::all();

    $p1 = new Professor;
    $p1->nomeProfessor = $_POST['nome'];
    $p1->matriculaProfessor = $_POST['matricula'];
    $p1->escolaridadeProfessor = $_POST['escolaridade'];
    $p1->especialidadeProfessor = $_POST['especialidade'];

    $p1->save();
    echo '<script>alert("Professor cadastrado com sucesso!");';
    echo '<script>window.location.href = document.referrer;</script>';  
        
} catch (Exception $e) {
    echo '<script>alert("Erro ao cadastrar professor: ' . $e->getMessage() . '");';
    echo 'window.location.href = document.referrer;</script>';
}
?>
