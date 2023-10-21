<?php
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\DisciplinaGateway.php";
    require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Disciplina.php";
    require_once "../conexao/Conexao.php";

    try{
        $conexao = new Conexao();
        $conn = $conexao->getConexao();
        Disciplina::setConnection($conn);

        $disciplinas = Disciplina::all(); 
        
        $p1 = new Disciplina;
        $p1->nomeDisciplina = $_POST['nomeDisciplina'];
        $p1->cargaHorariaDisciplina = $_POST['cargaHorariaDisciplina'];
        $p1->save();
        echo '<script>alert("Disciplina Cadastrada com sucesso!");';
        echo 'window.location.href = document.referrer;</script>';
    } catch (Exception $e) { 
        echo '<script>alert("Erro ao cadastrar disciplina: ' . $e->getMessage() . '");';
        echo 'window.location.href = document.referrer;</script>'; 
        }
?>