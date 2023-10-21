<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\AlunoGateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Aluno.php";
    require_once "../conexao/Conexao.php";

    try{
        $conexao = new Conexao();
        $conn = $conexao->getConexao();

        Aluno::setConnection($conn);

        $alunos = Aluno::all(); 
        
        $p1 = new Aluno;
        $p1->nomeAluno = $_POST['nome'];
        $p1->matriculaAluno = $_POST['matricula'];

        $p1->save();

        echo '<script>alert("Aluno cadastrado com sucesso!");';
        echo 'window.location.href = document.referrer;</script>';
    } catch (Exception $e) {
        echo '<script>alert("Erro ao cadastrar aluno: ' . $e->getMessage() . '");';
        echo 'window.location.href = document.referrer;</script>';    }
?>