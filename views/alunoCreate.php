<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/sb-admin-2.min.css">
  <title>Document</title>
</head>

<body  id="page-top">
  <div id="wrapper">

<!-- SIDEBAR -->
<?php include '../views/layouts/sidebar.html'; ?>

<div id="content-wrapper" class="d-flex flex-column">
           
 <!-- NAVBAR -->
<div id="content">
<?php include '../views/layouts/navbar.html'; ?>
           
<!-- CONTENT -->
<div class="container">
  <div class="row">
      <div class="col col-12">
          <h3>Cadastro de Alunos</h3>
          <hr>
      </div>
      <div class="col col-12 m-auto">
          <form id="formulario_registro" method="post" action="../exemplo_aluno.php">
              <br>
              <div class="card">
                  <div class="card-header text-center bg-primary" id="headingOne" style="
                       background: rgb(26,122,178);;
                  ">
                      <h5 class="mb-0">
                          <input type="button" class="btn btn-link text-white font-weight-bold"
                                 value="DADOS DO ALUNO">
                      </h5>
                  </div>

                  <div id="collapseOne" class="collapse multi-collapse show" aria-labelledby="headingOne"
                       data-parent="#accordion">
                      <div class="card-body">
                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      <label for="nome">Nome do Aluno:</label>
                                      <input type="text" class="form-control" name="nome"
                                             id="nome" placeholder="Nome do Aluno:" required>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      <label for="matricula">Matrícula do Aluno:</label>
                                      <input type="text" class="form-control" name="matricula"
                                             id="matricula" placeholder="Matrícula do Aluno:" required>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col col-12 text-right">
                                  <input type="submit" class="btn btn-outline-dark font-weight-bold"
                                         value="Cadastrar">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
    </div>
  </div>

    <!-- NAVBAR -->
    <?php include '../views/layouts/footer.html'; ?>
</div>
</body>

</html>