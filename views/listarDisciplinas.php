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

    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar" style="background: rgb(26,122,178);
background: linear-gradient(187deg, rgba(26,122,178,1) 15%, rgba(26,122,178,1) 76%, rgba(54,151,212,1) 92%, rgba(90,188,255,1) 100%);
">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="../img/icon.png" alt="" width="50" height="50">
        </div>
        <div class="sidebar-brand-text mx-1"><strong>SIGAA</strong></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <!-- <span class="material-symbols-outlined">
                      home
                  </span> -->
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="#collapseUtilities2" aria-expanded="true"
          aria-controls="collapseUtilities2">
          <!-- <span class="material-symbols-outlined">
                      apartment
                  </span> -->
          <span>Professor</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
          data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded d-sm-none">
            <a class="collapse-item" href="{{route('secretarias.index')}}">Secretarias Cadastradas</a>
            <a class="collapse-item" href="{{route('secretarias.create')}}">Nova Secretaria</a>
          </div>
          <div class="bg-transparent py-2 collapse-inner rounded d-none d-sm-block">
            <a class="collapse-item" href="{{route('secretarias.index')}}">Secretarias Cadastradas</a>
            <a class="collapse-item" href="{{route('secretarias.create')}}">Nova Secretaria</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <!-- <span class="material-symbols-outlined">
                      event_available
                  </span> -->
          <span>Aluno</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded d-sm-none">
            <a class="collapse-item" href="{{route('eventos.index')}}">Eventos Cadastrados</a>
            <a class="collapse-item" href="{{route('eventos.create')}}">Cadastrar Novo Evento</a>
          </div>
          <div class="bg-transparent py-2 collapse-inner rounded d-none d-sm-block">
            <a class="collapse-item" href="{{route('eventos.index')}}">Eventos Cadastrados</a>
            <a class="collapse-item" href="{{route('eventos.create')}}">Cadastrar Novo Evento</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-target="#collapseUtilities" aria-expanded="true"
          aria-controls="collapseUtilities">
          <!-- <span class="material-symbols-outlined">
                      group
                  </span> -->
          <span>Cursos</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded d-sm-none">
            <a class="collapse-item" href="{{route('participantes.index')}}">Participantes Cadastrados</a>
            <a class="collapse-item" href="{{route('participantes.create')}}">Cadastrar Novo Participante</a>
          </div>
          <div class="bg-transparent py-2 collapse-inner rounded d-none d-sm-block">
            <a class="collapse-item" href="{{route('participantes.index')}}">Participantes Cadastrados</a>
            <a class="collapse-item" href="{{route('participantes.create')}}">Cadastrar Novo Participante</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true"
          aria-controls="collapseTwo">
          <!-- <span class="material-symbols-outlined">
                      fact_check
                  </span> -->
          <span>Matrículas</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded d-sm-none">
            <a class="collapse-item" href="{{route('matriculas.create')}}">Realizar Nova Matrícula</a>
            <a class="collapse-item" href="{{route('matriculas.index')}}">Matrículas Realizadas</a>
          </div>
          <div class="bg-transparent py-2 collapse-inner rounded d-none d-sm-block">
            <a class="collapse-item" href="{{route('matriculas.create')}}">Realizar Nova Matrícula</a>
            <a class="collapse-item" href="{{route('matriculas.index')}}">Matrículas Realizadas</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario</span>
                <img class="../img-profile rounded-circle" src="img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item text-dark" href="{{ route('perfil.show', auth()->user()->id) }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-dark" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>

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
              <a href="cursoCreate.html" class="btn btn-primary">
                  Novo Curso
              </a>
            </div>
            <br><br><br>

        <div class="w-100">
            <div class="list-group">
                
            <?php
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\gateway\CursoGateway.php";
            require_once "C:\\xampp\htdocs\sistemaEscolarPHP\Classes\Curso.php";
            $username = "root";
            $password = "";

            try{
                $conn = new PDO ('mysql:host=localhost; dbname=dbescolar', $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                Curso::setConnection($conn);

                $cursos = Curso::all(); //retorna todos os objetos da tabela

                //Início do foreach() para exclusão
                  foreach ($cursos as $curso) {
                    echo '<div class="list-group-item shadow-sm">';
                    echo    '<div class="row">';
                    echo      '<div class="col">';
                    echo        '<p class="mb-1"><b>Nome do Curso: </b>' . $curso->nomeCurso . '</p>';
                    echo        '<small class="text-muted"><b>Carga Horária do Curso : </b>' . $curso->cargaHorariaCurso . ' Horas</small>';
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
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                &copy; Direito Autoral <strong><span>Instituto Federal do Acre - (IFAC)</span></strong>. Todos os Direitos Reservados.
            </div>
        </div>
    </footer>
      
</body>

</html>