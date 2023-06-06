<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/sb-admin-2.min.css">
  <link rel="stylesheet" href="css/index.css">
  <title>Document</title>
</head>

<body id="page-top">
  <div id="wrapper">

    <!-- SIDEBAR -->
    <?php include 'views/layouts/sidebar.html'; ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- NAVBAR -->
      <div id="content">
      <?php include 'views/layouts/navbar.html'; ?>

      <!-- CONTENT -->
        <div class="col col-12">
          <h3>Bem vindo ao Sistema Escolar</h3>
          <hr>
        </div>

        <div class="cardContainer">
          <div class="cardPubli">
            <img src="img/aluno.png" alt="Imagem do card">
            <div class="cardConteudo">
              <h3>Alunos</h3>
              <p>Clique abaixo para visualizar cursos cadastrados na instituição</p>
              <a href="views/listarAlunos.php" class="btn">Buscar</a>
            </div>
          </div>

          <div class="cardPubli">
            <img src="img/professor.jpg" alt="Imagem do card">
            <div class="cardConteudo">
              <h3>Professores</h3>
              <p>Clique abaixo para visualizar cursos cadastrados na instituição</p>
              <a href="views/listarProfessores.php" class="btn">Buscar</a>
            </div>
          </div>

          <div class="cardPubli">
            <img src="img/cursos.jpg" alt="Imagem do card">
            <div class="cardConteudo">
              <h3>Cursos</h3>
              <p>Clique abaixo para visualizar cursos cadastrados na instituição</p>
              <a href="views/listarCursos.php" class="btn">Buscar</a>
            </div>
          </div>

          <div class="cardPubli">
            <img src="img/disciplina.jpg" alt="Imagem do card">
            <div class="cardConteudo">
              <h3>Disciplinas</h3>
              <p>Clique abaixo para visualizar disciplinas cadastrados na instituição</p>
              <a href="views/listarDisciplinas.php" class="btn">Buscar</a>
            </div>
          </div>
          
        </div>
      </div>
      </main>

      <!-- FOOTER -->
      <?php include 'views/layouts/footer.html'; ?>
</body>

</html>