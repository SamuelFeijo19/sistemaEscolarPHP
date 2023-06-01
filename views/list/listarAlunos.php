<?php
    require_once "C:\\xampp\htdocs\Tarefa\Classes\gateway\AlunoGateway.php";
    require_once "C:\\xampp\htdocs\Tarefa\Classes\Aluno.php";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Aluno::setConnection($conn);

        $alunos = Aluno::all(); //retorna todos os objetos da tabela

        //Início do foreach() para exclusão
        foreach ($alunos as $aluno) {
           print('nome do Aluno:'.$aluno->nomeAluno.'<br>');
           print('Matrícula do Aluno:'.$aluno->matriculaAluno.'<br>');
            print('<br><br>');

        }//Fim do foreach()

        // $b1 = Professor::all();
        // print 'Nome do Professor: '.$b1->nomeProfessor. "<br>\n";
        // print 'Matrícula do Professor: '.$b1->matriculaProfessor. ". <br>\n";

    } catch (Exception $e) {
        print $e->getMessage();
    }
?>