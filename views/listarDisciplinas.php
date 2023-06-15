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
              <a href="disciplinaCreate.php" class="btn btn-primary">
                  Nova Disciplina
              </a>
            </div>
            <br><br><br>

        <div class="w-100">
            <div class="list-group">
                
            <?php
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\DisciplinaGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Disciplina.php";
            $username = "root";
            $password = "root";

            try{
                $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Disciplina::setConnection($conn);

                $disciplinas = disciplina::all(); //retorna todos os objetos da tabela

                //Início do foreach() para exclusão
                  foreach ($disciplinas as $disciplina) {
                    echo '<div class="list-group-item shadow-sm">';
                    echo    '<div class="row">';
                    echo      '<div class="col">';
                    echo        '<p class="mb-1"><b>Nome da Disciplina: </b>' . $disciplina->nomeDisciplina . '</p>';
                    echo        '<small class="text-muted"><b>Carga Horária da Disciplina : </b>' . $disciplina->cargaHorariaDisciplina . ' Horas</small>';
                    echo        '<br>';
                    echo      '</div>';
                    echo    '</div>';
                    echo '</div>';
                    echo '</br>';

                }//Fim do foreach()
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