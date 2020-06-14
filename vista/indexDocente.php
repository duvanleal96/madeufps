<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MADEUFPS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Custom Sweetalert2 -->
  <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <!-- Main Header -->
    <header class="main-header">
      <!-- Logo -->
      <a href="indexDocente.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>MADEUFPS</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- /.messages-menu -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Docente</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                  <p>Docente</p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="pages/salir.php" class="btn btn-default btn-flat">Cerrar sesion</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Docente</p>
          </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Registro Curso</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/registroCurso.php"><i class="fa fa-circle-o"></i>Registro Curso</a></li>
              <li><a href="pages/registroNotas.php"><i class="fa fa-circle-o"></i>Notas</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Left side column. contains the logo and sidebar -->
    <!--------------------------
        | Your Page Content Here |
        -------------------------->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Registro Curso</h1>
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <div class="register-box-body ">
          <p class="login-box-msg">Registrar de nuevo curso </p>
          <form id="FormRegistroCurso" name="FormRegistroCurso" action="../modelo/registrarCurso.php" method="post">
            <div class="row">
              <div class="col-xs-2 col-sm-2"></div>
              <div class="col-xs-8 col-sm-8">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="number" class="form-control" placeholder="Código" name="codigo" id="codigo" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="number" class="form-control" placeholder="Cantidad de estudiantes" name="estudiantes" id="estudiantes" required>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <!-- <div class="col-md-3"></div> -->
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                  </div>
                  <!-- <div class="col-md-3"></div> -->
                  <!-- /.col -->
                </div>
              </div>
              <div class="col-xs-2 col-sm-2"></div>
            </div>
          </form>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- START FOOTER -->
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
      </div>
      <!-- Default to the left -->
      <strong>
        <span>Copyright &copy; MADEUFPS
          <script>
            document.write(new Date().getFullYear());
          </script>
        </span>
      </strong>
    </footer>
    <!-- END FOOTER -->
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script src="js/registro.js"></script>
  <!-- Javascript Sweetalert2 -->
  <script src="js/sweetalert2.min.js"></script>
</body>

</html>