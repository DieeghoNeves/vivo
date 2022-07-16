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
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagens/qld01.PNG">
  <title>Célula de Qualidade</title>

    <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- icones ionic -->
  <script  src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <!-- estilos -->
  <link rel="stylesheet" href="../css/estilo.css">
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
    <!--  <a href="wifi.php" class="nav-link">Visão cidade eps</a> -->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button"></a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
             
              <div class="input-group-append">             
                </button>
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
               <li class="nav-item">
            <a href="ranking.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ranking
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
          <li class="nav-item">
            <a href="bases_indicadores.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bases
               <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Indicadores
                <i class="fas fa-angle-left right"></i>
              <!--  <span class="badge badge-info right">6</span> -->
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
                <a href="lig_indevidas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ligações Indevidas</p>
                </a>
              </li>
            </ul>
          </li> 
    </div>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php
  if($_SESSION['msgError'] != ""){?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_SESSION['msgError'];?>
    </div>
 <?php }
  if($_SESSION['msg'] != ""){?>
    <div class="alert alert-success" role="alert">
    <?php echo $_SESSION['msg'];?>
    </div>
  <?php }

?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h1 class="align-middle text-center">Cadastro de Vistoria</h1>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>            
    <!-- /.card-header -->
     <section class="content">
      <div class="container-fluid">
            <div class="card">
             <div class="card-body">
             <form action="processaVistoriaCad.php" enctype="multipart/form-data">
             <div class="form-row">
                <div class="col-3">
                    <label for="telefone">Telefone/Designador:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="col-3">
                    <label for="data_vistoria">Data Vistoria:</label>
                    <input type="date" class="form-control" id="data_vistoria" name="data_vistoria">
                </div>
                <div class="col-3">
                    <label for="matricula_tecnico">Matrícula Técnico ETA:</label>
                    <div class="input-group-append">
                    <input type="text" class="form-control" id="matricula_tecnico" name="matricula_tecnico">
                        <button><ion-icon name="search"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-3">
                    <label for="armario">Armário:</label>
                    <input type="text" class="form-control" id="armario" name="armario">
                </div>
                <div class="form-group col-5">
                    <label for="localidade">Localidade:</label>
                    <select class="form-control" id="localidade" name="localidade">
                     <option>1</option>
                    </select>
                </div>
            </div>
            <div class="form-row">    
                <div class="col-9">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" Placeholder="Rua Abc, 140, Jd Brasil">
                </div>    
            </div>
            <div class="form-group">
                <label for="arquivos">Selecione os arquivos:</label>
                <input type="file" class="form-control-file" id="file1" name="file1">
                <input type="file" class="form-control-file" id="file2" name="file2">        
                <input type="file" class="form-control-file" id="file3" name="file3">        
            </div>
          <div class="form-group">
            <label for="observacao1">Observações:</label>
            <textarea class="form-control" id="observacao1" name="observacao1" rows="3" Placeholder="Campo livre para observação em relação a vistoria."></textarea>
          </div>
          <div class="form-group">
          <div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5">				
			</div>
            <div class="col-auto my-1">
              <button type="submit" class="btn btn-primary">Enviar</button>
          </div> 
          </div>
        </form>
    </div>
</div>
</div>
</div>
</section>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style=>
    <strong>Copyright &copy; 2021-2021 <a href="inicio.php">Célula de Qualidade</a>.</strong> todos os direitos reservados.
  </footer>

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
