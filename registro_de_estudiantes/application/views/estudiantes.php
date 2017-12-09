<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Registro de Estudiantes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="assets/custom/css/general.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Registro</b>Estudiantes</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu horaActualGrande">
            <a href="#"><?php echo $fechaActual; ?></a>
          </li>

          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $userData['name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <p>
                  <?php echo $userData['name']; ?> - Web Developer
                  <small>Usuario desde <?php echo $userData['created_at']; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile" class="btn btn-warning btn-flat"><i class="fa fa-pencil"></i> Editar perfil</a>
                </div>
                <div class="pull-right">
                  <a href="users/logout" class="btn btn-danger btn-flat"><i class="fa fa-power-off"></i> Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $userData['name']; ?></p>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="active">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span><?php echo $title; ?></span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
        <small>Ajustes de <?php echo $title; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Usuarios</li>
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <div class="messages"></div>

          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8">
                  <h3 class="box-title">Listado de <?php echo $title; ?></h3>
                </div>
                <div class="col-xs-4">
                  <button type="button" class="btn btn-primary btn-flat pull pull-right registrarEstudiante" data-toggle="modal" data-target="#registrarEstudiante" onclick="registrarEstudianteModal()"><i class="fa fa-user-plus"></i> <span class="quitarTexto">Registrar Estudiante</span></button>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tablaEstudiantes" class="table table-bordered table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Opciones</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>© <?php echo date('Y'); ?>All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- Agregar estudiante modal -->
<div class="modal fade" id="registrarEstudiante">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modalCabeceraPrimario">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-user-plus"></i> Registrar Estudiante</h4>
      </div>
      <!-- form start -->
      <form role="form" method="post" action="estudiantes/registrar" id="registrarEstudianteForm">
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
                <label>Nombre(s)</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del estudiante">
              </div>
            </div>
            <div class="form-group">
                <label>Apellido(s)</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user-o"></i>
                </span>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del estudiante">
              </div>
            </div>
            <div class="form-group">
                <label>Edad</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-birthday-cake"></i>
                </span>
                <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad del estudiante">
              </div>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" id="telefono" name="telefono" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Teléfono del estudiante">
                </div>
                <!-- /.input group -->
              </div>
            <div class="form-group">
                <label>Dirección</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-map-marker"></i>
                </span>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección del estudiante">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o"></i> Registrar Estudiante</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- ./Agregar estudiante modal -->

<!-- Editar estudiante modal -->
<div class="modal fade" id="editarEstudiante">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modalCabeceraAdvertencia">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-pencil"></i> Editar Estudiante</h4>
      </div>
      <!-- form start -->
      <form role="form" method="post" action="estudiantes/editarEstudiante" id="editarEstudianteForm">
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
                <label>Nombre(s)</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user"></i>
                </span>
                <input type="text" class="form-control" id="editarNombre" name="editarNombre" placeholder="Nombre del estudiante">
              </div>
            </div>
            <div class="form-group">
                <label>Apellido(s)</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user-o"></i>
                </span>
                <input type="text" class="form-control" id="editarApellido" name="editarApellido" placeholder="Apellido del estudiante">
              </div>
            </div>
            <div class="form-group">
                <label>Edad</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-birthday-cake"></i>
                </span>
                <input type="text" class="form-control" id="editarEdad" name="editarEdad" placeholder="Edad del estudiante">
              </div>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" id="editarTelefono" name="editarTelefono" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Teléfono del estudiante">
                </div>
                <!-- /.input group -->
              </div>
            <div class="form-group">
                <label>Dirección</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-map-marker"></i>
                </span>
                <input type="text" class="form-control" id="editarDireccion" name="editarDireccion" placeholder="Dirección del estudiante">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
          <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o"></i> Actualizar Estudiante</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- ./Editar estudiante modal -->

<!-- Eliminar estudiante modal -->
<div class="modal fade" id="eliminarEstudiante">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modalCabeceraPeligro">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-user-times"></i> Eliminar Estudiante</h4>
      </div>
      <div class="modal-body">
        <p>Estas seguro que deseas eliminar a este estudiante?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
        <button type="button" id="eliminarEstudianteBtn" class="btn btn-danger btn-flat"><i class="fa fa-trash-o"></i> Eliminar Estudiante</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.Eliminar estudiante modal -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Custom -->
<script src="assets/custom/js/estudiantes/estudiantes.js"></script>
<!-- page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

</body>
</html>
