<?php
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\ProfessorDisciplinaGateway.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Professor.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Disciplina.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\ProfessorDisciplina.php";

$username = "root";
$password = "";

try {
    $conn = new PDO('mysql:host=localhost; dbname=dbescolar', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ProfessorDisciplina::setConnection($conn);

    // Obtém o ID do curso e da disciplina selecionados no formulário
    $codigoProfessor = $_POST['codigoProfessor'];
    $codigoDisciplina = $_POST['codigoDisciplina'];

    // Cria um objeto CursoDisciplina e atribui os códigos do curso e disciplina
    $ProfessorDisciplina = new ProfessorDisciplina();
    $ProfessorDisciplina->codigoProfessor = $codigoProfessor;
    $ProfessorDisciplina->codigoDisciplina = $codigoDisciplina;

    // Salva o objeto na tabela CursoDisciplina
    $ProfessorDisciplina->save();

    echo "Inserção realizada com sucesso!";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>