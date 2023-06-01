<?php
    require_once "C:\\xampp\htdocs\Tarefa\Classes\gateway\ProfessorGateway.php";
    require_once "C:\\xampp\htdocs\Tarefa\Classes\Professor.php";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Professor::setConnection($conn);

        $professores = Professor::all(); //retorna todos os objetos da tabela

        //Início do foreach() para exclusão
        foreach ($professores as $professor) {
           print('nome do Professor:'.$professor->nomeProfessor.'<br>');
           print('Especialidade do Professor:'.$professor->especialidadeProfessor.'<br>');
           print('Matrícula do Professor:'.$professor->matriculaProfessor.'<br>');
           print('Escolaridade do Professor:'.$professor->escolaridadeProfessor.'<br>');
            print('<br><br>');

        }//Fim do foreach()

        // $b1 = Professor::all();
        // print 'Nome do Professor: '.$b1->nomeProfessor. "<br>\n";
        // print 'Matrícula do Professor: '.$b1->matriculaProfessor. ". <br>\n";

    } catch (Exception $e) {
        print $e->getMessage();
    }
?>