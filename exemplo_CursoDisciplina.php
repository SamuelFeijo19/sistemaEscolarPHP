<?php
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\CursoDisciplinaGateway.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Curso.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Disciplina.php";
require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\CursoDisciplina.php";

$username = "root";
$password = "root";

try {
    $conn = new PDO('mysql:host=localhost; dbname=dbescolar', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    CursoDisciplina::setConnection($conn);

    // Obtém o ID do curso e da disciplina selecionados no formulário
    $codigoCurso = $_POST['codigoCurso'];
    $codigoDisciplina = $_POST['codigoDisciplina'];

    // Cria um objeto CursoDisciplina e atribui os códigos do curso e disciplina
    $cursoDisciplina = new CursoDisciplina();
    $cursoDisciplina->codigoCurso = $codigoCurso;
    $cursoDisciplina->codigoDisciplina = $codigoDisciplina;

    // Salva o objeto na tabela CursoDisciplina
    $cursoDisciplina->save();

    echo "Inserção realizada com sucesso!";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>