<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/sb-admin-2.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <title>Document</title>
</head>

<body id="page-top">
  <div id="wrapper">

        <!-- SIDEBAR -->
        <?php include '../views/layouts/sidebar.html'; ?>

<div id="content-wrapper" class="d-flex flex-column">

  <!-- NAVBAR -->
  <div id="content">
  <?php include '../views/layouts/navbar.html'; ?>

  <!-- CONTENT -->
        <div class="container-fluid">
    <div style="width: 100%;">
        <div class="col col-12">
            <h3>Cursos Cadastrados</h3>
            <hr>
        </div>

        <style>
          .button-container{
              float: right;
              padding-top: 20px;
          }
          @media (max-width: 650px) {
              .button-container {
                  float: none;
                  padding-top: 10px;
                  width: 100%;
              }
              .btn {
                  width: 100%;
              }
          }
        </style>
            <div class="button-container d-flex flex-column-reverse justify-content-center">
              <a href="cursoCreate.php" class="btn btn-primary">
                  Novo Curso
              </a>
            </div>
            <br><br><br>

        <div class="w-100">
            <div class="list-group">
                
            <?php
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\CursoGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\DisciplinaGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\CursoDisciplinaGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Curso.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Disciplina.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\CursoDisciplina.php";
            $username = "root";
            $password = "root";

            try{
                $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Curso::setConnection($conn);
                Disciplina::setConnection($conn);

                CursoDisciplina::setConnection($conn);

                $cursos = Curso::all(); //retorna todos os objetos da tabela
                $disciplina = Curso::all(); //retorna todos os objetos da tabela
                $cursoDisciplina = CursoDisciplina::all(); //retorna todos os objetos da tabela
                //Início do foreach() para exclusão
                foreach ($cursos as $curso) {
                    echo '<div class="list-group-item shadow-sm">';
                    echo    '<div class="row">';
                    echo      '<div class="col line">';
                    echo        '<div class="">';
                    echo        '<p class="mb-1"><b>Nome do Curso: </b>' . $curso->nomeCurso . '</p>';
                    echo        '<small class="text-muted"><b>Carga Horária do Curso: </b>' . $curso->cargaHorariaCurso . ' Horas</small>';
                    echo        '<br>';
                    echo        '</div>';
                    echo        '<a href="CursoDisciplinaCreate.php?id='.$curso->id. '">+</a>';
                    echo      '</div>';
                    echo '</div>';
                
                    // Imprimir as disciplinas do curso
                    echo '<div id="accordion">';
                    foreach ($cursoDisciplina as $cursoDisc) {
                        if ($cursoDisc->codigoCurso == $curso->id) {
                            $disciplina = Disciplina::find($cursoDisc->codigoDisciplina);
                            echo '<div class="card">';
                            echo    '<div class="card-header" id="heading' . $cursoDisc->codigoDisciplina . '">';
                            echo        '<h5 class="mb-0">';
                            echo            '<p class=""' . $cursoDisc->codigoDisciplina . '" ' . $cursoDisc->codigoDisciplina . '">';
                            echo                $disciplina->nomeDisciplina;
                            echo            '</p>';
                            echo        '</h5>';
                            echo    '</div>';
                            echo    '<div id="collapse' . $cursoDisc->codigoDisciplina . '" class="collapse" aria-labelledby="heading' . $cursoDisc->codigoDisciplina . '" data-parent="#accordion">';
                            echo        '<div class="card-body">';
                            echo            'Conteúdo da disciplina';
                            echo        '</div>';
                            echo    '</div>';
                            echo '</div>';
                        }
                    }
                    echo '</div>';
                
                    echo '</div>';
                    echo '</br>';
                }
                echo '</div>';
                echo '</div>';

                // $b1 = Professor::all();
                // print 'Nome do Professor: '.$b1->nomeProfessor. "<br>\n";
                // print 'Matrícula do Professor: '.$b1->matriculaProfessor. ". <br>\n";

            } catch (Exception $e) {
                print $e->getMessage();
            }
          ?>

                    
    </div>
</div>

</div>
  <!-- FOOTER -->
  <?php include '../views/layouts/footer.html'; ?>
</body>

</html>