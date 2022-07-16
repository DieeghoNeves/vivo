<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <?php
	include 'conexao.php'; 
  error_reporting(~E_NOTICE);
  session_start();
  if (!isset($_SESSION["nome"]) ){
  header ("location: sair.php");
  exit;
  }	
  if($_SESSION['perfil']!='Administrador'){
    header ("location: inicio.php"); 
    exit;
  }
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagens/favicon.ico">
  <title>Célula de Qualidade</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="inicio.php" class="nav-link">Pagina inicial</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contato</a> -->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Procurar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
         <!-- <span class="badge badge-danger navbar-badge">3</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"></a>
          <div class="dropdown-divider"></div>
         <!-- <a href="#" class="dropdown-item dropdown-footer">See All Messages</a> -->
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php" role="button">
         <span class="badge badge-danger navbar-badge">Sair</span> 
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio.php" class="brand-link">
      <img src="../../dist/img/qualidade.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SGI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><a href="inicio.php"><?php echo $_SESSION['nome']; ?></a></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- BOLETIM DE QUALIDADE E RANKING-->

          <li class="nav-item">
            <a href="ranking.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ranking
                <span class="right badge badge-danger">New</span>

                <!-- FIM COMENTARIO BOLETIM DE QUALIDADE E RANKING-->
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="bases.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bases Pós
               <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="bases_indicadores.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bases Indicadores
               <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="recente.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="repetido.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Repetido</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="wifi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wifi Design</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="efika.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Efika Full Teste</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lig_indevidas2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ligações Indevidas</p>
                </a>
              </li>
            </ul>
          </li>
 <!--FIM INDICADORES-->
</div>
 <!-- /.sidebar -->
 </aside>

 <? php
$ msg = false ;

if ( isset ( $ _FILES [ 'arquivo' ])) {

  $ extensao = strtolower ( substr ( $ _FILES [ 'arquivo' ] [ 'nome' ], - 4 )); // pega um extensao do arquivo
  $ novo_nome = md5 ( tempo ()). $ extensao ; // define o nome do arquivo
  $ diretorio = ='uploads/'; // define o diretório para onde enviaremos o arquivo

  move_uploaded_file ( $ _FILES [ 'arquivo' ] [ 'tmp_name' ], $ diretorio . $ novo_nome ); // efetua o upload

  $ sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES (null, '$ novo_nome', NOW ())" ;

  if ( $ mysqli -> query ( $ sql_code ))
    $ msg = "Arquivo enviado com sucesso!" ;
  outro
    $ msg = "Falha ao enviar arquivo." ;

}

?>
<h1> Upload de Arquivos </h1 >
<? php  if ( isset ( $ msg ) && $ msg ! = false ) echo  "<p> $ msg </p>"; ?>
<form  action = "importa_bases2.php" method = "POST" enctype = "multipart/form-data" >
Arquivo: <input  type = "file" required  name = "arquivo" >
<input  type = "submit" value = "Salvar" >
</form >

<!--
<table>
  <form method="post" action="importa_bases.php" enctype="multipart/form-data">
    <label> -0600 - 0700 - 0800 - 0500:</label>
    <input type="file" name="arquivo"/>
    <input type="submit" name="enviar" value="Enviar-bases"/>
  </form>
</table> -->



</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
 <!-- /.content-wrapper -->
 <footer class="main-footer">  
    <strong>Copyright &copy; 2021-2021 <a href="inicio.php">Célula de Qualidade</a>.</strong> todos os direitos reservados.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>