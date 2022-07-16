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
        <a href="inicio.php" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
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
          <li class="nav-item">
            <a href="boletim.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Boletim de Qualidade
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
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
                <a href="lig_indevidas2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ligações Indevidas</p>
                </a>
              </li>
            </ul>
          </li>
                <!--MONTAR AS VISOES GRAFICAS-->

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Visões
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
        </ul>
      </li>  
  </ul>
</nav> -->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php
        $sql_criticos= "select *from projecao";
        //echo $sql_criticos;
        
        $query_criticos = mysqli_query($conn, $sql_criticos) or die( mysqli_error());
        //var_dump($result);  
?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="align-middle text-center">RANKING DOS TECNICOS</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

 <?php

      if($filtro !="" OR $filtro2 !=""){
        $filtrar = "where 1 ";
          if ($filtro != ""){
            $filtrar .= "and `eps` = '{$filtro}'";
          }
        if($filtro2 !=""){
          $filtrar .= "and `cidade` = '{$filtro2}'";
        }    
      }
        $sql_criticos= "select *from ranking {$filtrar}";
        //echo $sql_criticos;
        
        $query_criticos = mysqli_query($conn, $sql_criticos) or die( mysqli_error());
        //var_dump($result);
  
?> 

              
              <!-- /.card-header -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div>
            <div class="card">
              <div class="card-header">
                <!--<h3 class="card-title text-center">coloque aqui seu texto</h3> -->
              </div>
            <div class="card-body">
                <table id="example2" class="table table-sm table table-bordered table table-hover">
                  <thead>
                  <tr>
                      <th class="align-middle text-sm-center" >CIDADE</th>   
                      <th class="align-middle text-sm-center" >EMPREITEIRA</th>
                      <th class="text-sm-center align-middle text-left col-sm-20" >TECNICO</th>
                      <th class="align-middle text-center" >IRR B2B</th>
                      <th class="align-middle" >IRR</th>
                      <th class="align-middle text-center" >IFI B2B</th>
                      <th class="align-middle" >IFI</th>
                      <th class="align-middle text-center" >WIFI DESIGN<N/th>
                      <th class="align-middle text-center" >FULL TESTE</th>
                      <th class="align-middle text-center" >LIG INDEVIDAS</th>
                      <th class="align-middle" >TOTAL</th>
                      <th class="align-middle" >MEDIA</th>
                  </tr>
                  </thead>
                  <tbody>
    <?php while($result = mysqli_fetch_assoc($query_criticos)){ ?>
                  <tr>
                      <td class="text-sm-center" ><?php echo $result['cidade']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['eps']; ?></td>
                      <td class="text-sm-center align-middle text-left col-sm-20" ><?php echo $result['tecnico']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['rep_b2b']; ?></td> 
                      <td class="text-sm-center" ><?php echo $result['rep']; ?></td> 
                      <td class="text-sm-center" ><?php echo $result['rec_b2b']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['rec']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['wifi']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['efika']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['lig_indev']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['total']; ?></td>
                      <td class="text-sm-center" ><?php echo $result['media']; ?></td>
                  </tr>
                  <?php  $data_update =$result['hora_importacao'];
    }    
  ?> 
                </table>
              </div>
              </div>
              </div>
              </div>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->

            <?php

if($filtro !="" OR $filtro2 !=""){
  $filtrar = "where 1 ";
    if ($filtro != ""){
      $filtrar .= "and `eps` = '{$filtro}'";
    }
  if($filtro2 !=""){
    $filtrar .= "and `cidade` = '{$filtro2}'";
  }    
}
  $sql_criticos= "select *from tec_lig_indevidas {$filtrar}";
  //echo $sql_criticos;
  
  $query_criticos = mysqli_query($conn, $sql_criticos) or die( mysqli_error());
  //var_dump($result);
  
?> 

              <!-- /.card-body -->           
    
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2021 <a href="inicio.php">Célula de Qualidade</a>.</strong> todos os direitos reservados.
  </footer>

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"], -->
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "colvis"],
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
            "lengthMenu": "Exibindo _MENU_ Registros por Pagina",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Exibindo Pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros",
            "infoFiltered": "(Filtrados de _MAX_ no total)",
            "search": "Pesquisar",
        },
        "paging": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
