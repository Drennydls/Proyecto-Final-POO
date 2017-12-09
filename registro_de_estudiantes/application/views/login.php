<div class="login-box">
  <div class="login-logo">
    <a href="">Registro de<b> Estudiantes</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">Iniciar sesión</h4>

    <form action="users/login" method="post" id="loginForm">
      <div id="messages"></div>
      <div class="form-group">
          <label>Nombre de Usuario</label>
        <div class="input-group">
          <span class="input-group-addon">
            <i class="fa fa-user"></i>
          </span>
          <input type="text" class="form-control" id="username" name="username" placeholder="Usuario..." autofocus>
        </div>
      </div>
      <div class="form-group">
          <label>Contraseña de Usuario</label>
        <div class="input-group">
          <span class="input-group-addon">
            <i class="fa fa-unlock"></i>
          </span>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña...">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
    <br>
    <a href="recoverpassword">Olvidé mi contraseña</a><br>
    <a href="register" class="text-center">Registrar una nueva cuenta</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Custom -->
<script src="assets/custom/js/login.js"></script>