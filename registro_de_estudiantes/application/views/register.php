<div class="login-box">
  <div class="login-logo">
    <a href="">Registro de<b> Estudiantes</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Registrar Usuario</p>

    <form action="users/register" method="post" id="registerForm">
      <div id="messages"></div>
      <div class="form-group has-feedback">
      <!-- Campo usuario -->
        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <!-- Campo -->
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <!-- Campo -->
        <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Confirmar Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <!-- Campo -->
        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nombre Completo">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <!-- Campo -->
        <input type="text" class="form-control" id="contact" name="contact" placeholder="Número de Contacto">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
        <!-- Campo -->
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
    <br>
    <a href="login" class="text-center">Ya tienes una nueva cuenta?</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Custom -->
<script src="assets/custom/js/register.js"></script>