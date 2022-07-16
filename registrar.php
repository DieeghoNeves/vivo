<?php
session_start();
ob_start();	

$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados); exit;
  if($dados['nome'] != '' && $dados['email'] != '' && $dados['usuario'] != '' &&
    $dados['senha'] != '' && $dados['eps']!= '' && $dados['funcao'] != '' && $dados['agree'] =='agree'){

      $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);   
      $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha, eps, funcao) VALUES (
              '" .$dados['nome']. "',
              '" .$dados['email']. "',
              '" .$dados['usuario']. "',
              '" .$dados['senha']. "',
              '" .$dados['eps']. "',
              '" .$dados['funcao']. "'
              )";
      $resultado_usario = mysqli_query($conn, $result_usuario);
      if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "Usuário cadastrado com sucesso";
        header("Location: index.php");
      }else{
        $_SESSION['msg'] = "Erro ao cadastrar o usuário";
      }

  }else{
    $_SESSION['msg'] = "Preencha todos os campos.";
  }
}
if(isset($_SESSION['msg'])){  
  ?>
  <div class="alert alert-danger" role="alert"><?php echo $_SESSION['msg']; ?></div>	
  <?php
  unset($_SESSION['msg']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Célula de qualidade</title>
  <link rel="icon" href="imagens/qld01.PNG">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="registrar.php" class="h4"><b>SISTEMA DE GESTÃO DE INDICADORES</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registre uma nova conta</p>
      <form method="POST" action="">
        <div class="input-group mb-3">
          <input name="nome" type="text" class="form-control" placeholder="Nome completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="usuario"  type="text" class="form-control" placeholder="Matricula">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="senha" type="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <div class="row">
            <div class="form-group col-sm-6">
            <select class="form-control input-sm cboCascading" id="eps" name="eps">
              <option value="">Eps</option>
              <option value="Vivo">Vivo</option>
              <option value="Ability">Ability</option>
              <option value="Metacom">Metacom</option>
            </select>
        </div>
        <div class="form-group col-sm-6">
            <select class="form-control input-sm cboCascading" id="funcao" name="funcao">
              <option value="">Função</option>
              <option value="Gerente">Gerente</option>
              <option value="Coordenador">Coordenador</option>
              <option value="Supervisor">Supervisor</option>
              <option value="Analista">Analista</option>
              <option value="Tecnico">Tecnico</option>
            </select>
        </div>
     
              <input type="checkbox" id="agree" name="agree" value="agree">
              <label for="agreeTerms">
              Eu concordo com os <a data-toggle="modal" data-target="#site_modal"  href="#">termos</a>              
              </label>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="btnCadUsuario" type="submit" class="btn btn-primary btn-block" value="Cadastrar">Cadastrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
      </div>

      <a href="index.php" class="text-center">Ja tenho acesso!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- modal termos -->

<div class="modal" id="site_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 style="text-align: justify" class="modal-title">TERMOS PARA ACESSO AO SISTEMA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="text-align: justify" class="modal-body">
        <p>Olá, bem vindo ao Sistema de Gestão de Indicadores!</br>
         Suas credencias sao de uso pessoal e intransferivel, ficando estritamente proibibo emprestar o acesso ou repassar bases para pessoas
         sem acesso ao portal.</br></br>  Ao concordar você estará assinando digitalmente.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
