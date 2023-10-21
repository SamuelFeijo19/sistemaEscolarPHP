<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../Public/css/all.min.css">
  <link rel="stylesheet" href="../Public/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="../Public/css/index.css">
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
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\CursoGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\DisciplinaGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\gateway\CursoDisciplinaGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Curso.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\Disciplina.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Models\CursoDisciplina.php";
            require_once "../conexao/Conexao.php";

            try{
                $conexao = new Conexao();
                $conn = $conexao->getConexao();
                Curso::setConnection($conn);
                Disciplina::setConnection($conn);

                CursoDisciplina::setConnection($conn);

                $cursos = Curso::all(); 
                $disciplina = Curso::all();
                $cursoDisciplina = CursoDisciplina::all(); 
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
                    echo '<br>';
                    echo '<p class="mb-1"><b>Disciplinas do Curso: </b></p>';
                    foreach ($cursoDisciplina as $cursoDisc) {
                        if ($cursoDisc->codigoCurso == $curso->id) {
                            $disciplina = Disciplina::find($cursoDisc->codigoDisciplina);

                            echo    $disciplina->nomeDisciplina;
                            echo    '<br>';
                        }
                    }
                    echo '</div>';
                
                    echo '</div>';
                    echo '</br>';
                }
                echo '</div>';
                echo '</div>';
                echo '<br><br>';
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