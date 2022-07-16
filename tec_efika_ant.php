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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/qld01.PNG">

    <title>CÉLULA DE QUALIDADE</title>

      <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a href="inicio.php"><?php echo "Bem-vindo ".$_SESSION['nome']; ?></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">

          <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge badge-danger">Sair</span>
          </a>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
			  </a>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">Configurações</a>
				<div class="dropdown-divider"></div>
				<a class="btn btn-sm btn-primary" href="sair.php" data-toggle="modal" data-target="#logoutModal">Sair</a>
			  </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">


      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">



          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="corplaca">
            </li>
          </ol>
          <!-- Area Chart Example-->

          <!-- DataTables Example -->
         
<!-- aqui tem um S a mais no select para desativalo -->

 <div class="card mb-3">
            <div class="card-header text-center">
              <h1>OFENSORES EFIKA - FULL TESTE</h1>  <!-- class="fas fa-table aparece o icone da tabela    </br></br></br> -->
            </div>  
      <tr>
      <div class="card-body">
	<div class="table-responsive">

        <div class="row">
          <div class="col-12">
              <div >
               <!--  <h3 class="card-title">OFENSORES</h3>-->
               <div><a class="btn btn-secondary btn-sm" href="efika.php">Visão Cluster</a></div></br>
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
        $sql_criticos= "select *from ofensores_full_teste {$filtrar}";
        //echo $sql_criticos;
        
        $query_criticos = mysqli_query($conn, $sql_criticos) or die( mysqli_error());
        //var_dump($result);
  
?> 

              
              <!-- /.card-header -->
              <div >
                <table id="example2" class="table table-sm table table-hover">
                  <thead>
                  <tr>
                      <th class="text-sm-left align-middle text-center"  >CIDADE</th>
                      <th class="text-sm-center align-middle text-center"  >EMPREITEIRA</th>
                      <th class="text-sm-center align-middle text-center"  >TECNICO</th>
                      <th class="text-sm-center align-middle text-center"  >PRODUÇÃO</th>
                      <th class="text-sm-center align-middle text-center"  >COM WFULL TESTE</th>
                      <th class="text-sm-center align-middle text-center"  >% COM FULL TESTE</th>
                      <th class="text-sm-center align-middle text-center"  >SEM FULL TESTE</th>
                      <th class="text-sm-center align-middle text-center col-sm-1"  >NOTA</th>
                  </tr>
                  </thead>
                  <tbody>
    <?php while($result = mysqli_fetch_assoc($query_criticos)){ ?>
                  <tr>
                      <td class="text-sm-left align-middle text-center" ><?php echo $result['cidade']; ?></td>
                      <td class="text-sm-center align-middle text-center" ><?php echo $result['eps']; ?></td>
                      <td class="text-sm-center align-middle text-center" ><?php echo $result['tecnico']; ?></td>
                      <td class="text-sm-center align-middle text-center" ><?php echo $result['producao']; ?></td> 
                      <td class="text-sm-center align-middle text-center" ><?php echo $result['com_wifi']; ?></td> 
                      <td class="text-sm-center align-middle text-center" ><?php echo $result['porcentagem']; ?></td>
                      <td class="text-sm-center align-middle text-center" ><?php echo $result['sem_wifi']; ?></td>
                      <td class="text-sm-center align-middle text-center col-sm-1" ><?php echo $result['nota']; ?></td>
                  </tr>
                  <?php  $data_update =$result['hora_importacao'];
    }    
  ?> 
                </table>
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
<!-- Page specific script -->
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
