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

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
      <?php
         $filtro = filter_input(INPUT_GET, 'filtro', FILTER_SANITIZE_STRING);
     ?>
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="GET" action="lista_atividades.php">
        <div class="input-group">
        <select class="filtro" id="filtro" name="filtro" onchange="submit()">
                  <option <?php if($filtro == ""){ echo "selected";} ?> value="" >Todas</option>
                  <option <?php if($filtro == "aberto"){ echo "selected";} ?> value="aberto">Abertas</option>
                  <option <?php if($filtro == "atribuido"){ echo "selected";} ?> value="atribuido">Atribuidas</option>
                  <option <?php if($filtro == "encerrado"){ echo "selected";} ?> value="encerrado">Fechadas</option>
                </select>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Outra coisa aqui</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação	</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Outra coisa aqui</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
			  </a>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">Configurações</a>
				<a class="dropdown-item" href="#">Registro de atividades</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="sair.php" data-toggle="modal" data-target="#logoutModal">Sair</a>
			  </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

     

      <div id="content-wrapper">

        <div class="container-fluid">

                  

<?php

  if($filtro !=""){
    $colocar = "where `status` = '{$filtro}'";
  }
    $sql_criticos= "select id_atividade, instancia, localidade, data_abertura, data_atribuicao, data_fechamento,
     `status`, detalhe_atividade, tecnologia, tec_executor, eps from preventivas {$colocar}"
    ;
    $query_criticos = mysqli_query($conn, $sql_criticos) or die( mysqli_error());
    //var_dump($result);
?> 
 <div class="card mb-3">
            <div class="card-header text-center">
              <h1>Lista das Atividades</h1>
            </div>   <!-- class="fas fa-table aparece o icone da tabela -->
      <tr>
      <div class="centralizar">
	<div class="table-responsive-lg">
	<table class="table table-bordered table table-hover text-center"  id="dataTable" width="100%" cellspacing="0"><!-- id="dataTable"  refente ao search -->
     <tr class="p-3 mb-2 bg-secondary text-white">
	  <th style="margin-top: 20px; min-height: 65vh;">Instancia</th>
    <th style="margin-top: 20px; min-height: 65vh;">Localidade</th>
    <th style="margin-top: 20px; min-height: 65vh;">Data abertura</th>
    <th style="margin-top: 20px; min-height: 65vh;">Data atribuição</th>
	  <th style="margin-top: 20px; min-height: 65vh;">Data fechamento</th>
    <th style="margin-top: 20px; min-height: 65vh;">Status</th>
    <th style="margin-top: 20px; min-height: 65vh;">Detalhe atividade</th>
    <th style="margin-top: 20px; min-height: 65vh;">Tecnologia</th>
    <th style="margin-top: 20px; min-height: 65vh;">Tecnico executor</th>
    <th style="margin-top: 20px; min-height: 65vh;">Eps</th>
	</tr>
  </thead>   
	<tbody>  
<?php 
while($result = mysqli_fetch_assoc($query_criticos)){ ?>					

	<tr class="font_dados">
	  <td><a href="preventivas.php?inst=<?php echo $result['id_atividade'] ?>"><?php echo $result['instancia']; ?></a></td>
	  <td><?php echo $result['localidade']; ?></td>
	  <td><?php echo date('d-m-Y H:i:s', strtotime($result['data_abertura'])); ?></td> 
    <td><?php echo $result['data_atribuicao'] == '' ? '' :date('d-m-Y H:i:s', strtotime($result['data_atribuicao'])); ?></td> 
    <td><?php echo $result['data_fechamento'] == '' ? '' : date('d-m-Y H:i:s', strtotime($result['data_fechamento'])); ?></td> 
	  <td><?php echo $result['status']; ?></td>
	  <td><?php echo $result['detalhe_atividade']; ?></td>
    <td><?php echo $result['tecnologia']; ?></td>
    <td><?php echo $result['tec_executor']; ?></td>
    <td><?php echo $result['eps']; ?></td>
	</tr>

    <?php  $data_update =$result['hora_importacao'];
    } 
    
  ?>  
  </tbody>
	</table>
  </div>
</div>

            <div class="card-footer small text-muted"><?php echo $data_update ;?> </div>
          </div>

          </div>

      
          <!-- <footer class="">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>Copyright © Célula de qualidade 2021 - 2021</span>
            </div>
          </div>
        </footer>-->


      <!-- /.content-wrapper -->

   
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Sair" abaixo para finalizar seu acesso!</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="sair.php">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script><!-- controla o search-->
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page controla as tabelas-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
  </body>

</html>