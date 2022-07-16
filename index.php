<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Célula de Qualidade</title>
  <link rel="icon" href="imagens/qld01.PNG">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!--  <script type="text/javascript">
		alert("Para melhor experiência, acessar utilizando firefox...");		
	</script>-->
</head>
<body class="hold-transition login-page">
<?php
			if(isset($_SESSION['msg'])){
			?>
        <div class="alert alert-danger" role="alert"><?php echo $_SESSION['msg']; ?></div>	
      <?php
				unset($_SESSION['msg']);
			}
		?>


<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="registrar.php" class="h4"><b>SISTEMA DE GESTÃO DE INDICADORES</b></a>
    </div>
    <div class="card-body">
     <!-- <p class="login-box-msg H2">SGI</p> -->

      <form method="POST" action="valida.php">
        <div class="input-group mb-3">
          <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Email ou  Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" id="inputPassword"  class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembrar me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="btnLogin" class="btn btn-primary btn-block" value="Logar">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">

      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
      <!--   <a href="recuperar_senha.php">Esqueci a minha senha</a> -->
      </p>
      <p class="mb-0">
        <a href="registrar.php" class="text-center">Solicitar acesso</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
