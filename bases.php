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
      <!--    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Indicadores
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span> -->
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
    <?php
      $path = "C:/xampp7.4/htdocs/BASES_VIVO/0500.xls";
      $data = date("d/m/Y", filemtime("$path"));

      $path0600 = "C:/xampp7.4/htdocs/BASES_VIVO/0600.xls";  
      $data600 = date("d/m/Y", filemtime("$path0600"));

      $path0700 = "C:/xampp7.4/htdocs/BASES_VIVO/0700.xls";
      $data700 = date("d/m/Y", filemtime("$path0700"));

      $Var_0800A = "C:/xampp7.4/htdocs/BASES_VIVO/0800 Instancias ativas por armário MT - CBA.xls";
      $path0800A = $Var_0800A;
      $data800A = date("d/m/Y", filemtime("$path0800A"));

      $Var_0800B = "C:/xampp7.4/htdocs/BASES_VIVO/0800 Instancias ativas por armário MT - ROI VAZ SNO.xls";
      $path0800B = $Var_0800B;
      $data800B = date("d/m/Y", filemtime("$path0800B"));
      
      $Var_0800C = "C:/xampp7.4/htdocs/BASES_VIVO/0800 Instancias ativas por armário MS - CPE DOS.xls";
      $path0800C = $Var_0800C;
      $data800C = date("d/m/Y", filemtime("$path0800C")); 

      $Var_0800D = "C:/xampp7.4/htdocs/BASES_VIVO/Instancias ativas Metalico MS.xls";
      $path0800D = $Var_0800D;
      $data800D = date("d/m/Y", filemtime("$path0800D"));

      $Var_0800E = "C:/xampp7.4/htdocs/BASES_VIVO/CONTATOS MASSIVO.xls";
      $path0800E = $Var_0800E;
      $data0800E = date("d/m/Y", filemtime("$path0800E"));      

    ?>

	<div class="row">
		<div class="col-sm-8 col-md-9 col-xs-9" >
			<div class="table-responsive">
				<table class="table table-sm table table-hover" id="Tabla_acumulativos">
					<thead>
					<tr class="listrabajos">
						<th></th>
						<th >Documentos</th>
						<th  >Baixar</th>
            <th  >Atualização</th>
					</tr>
					</thead>
					<tbody id="Cargar_correoCli">
												<tr class="tr_correoCli" id="" style="">
								<td>
                                </td>
								<td style="width: 500px;">
                                    BASE 0500                                </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/0500.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data}";?></span></td>
							</tr>
														<tr class="tr_correoCli" id="" style="">
								<td>
                                    
                                </td>
								<td style="width: 500px;">
                                    BASE 0600                               </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/0600.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data600}";?></span></td>
							</tr>
														<tr class="tr_correoCli" id="" style="">
								<td>
                                    
                                </td>
								<td style="width: 500px;">
                                    BASE 0700                               </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/0700.xls"download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data700}";?></span></td>
							</tr>
														<tr class="tr_correoCli" id="" style="">
								<td>
                                    
                                </td>
								<td style="width: 500px;">
                                    BASE 0800 - CBA                               </td>
								<td>
                                    <a  class="text-sm-center text-md-center" href="BASES_VIVO/0800 Instancias ativas por armário MT - CBA.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data800A}";?></span></td>
							</tr>
														<tr class="tr_correoCli" id="" style="">
								<td>
                                    
                                </td>
								<td style="width: 500px;">
                                    BASE 0800 - ROI - VAZ - SNO                                </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/0800 Instancias ativas por armário MT - ROI VAZ SNO.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data800B}";?></span></td>
							</tr>
              <tr class="tr_correoCli" id="" style="">
								<td>                                    
                                </td>
								<td style="width: 500px;">
                            BASE 0800 - CPE DOS                         </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/0800 Instancias ativas por armário MS - CPE DOS.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data800C}";?></span></td>
							</tr>

              <tr class="tr_correoCli" id="" style="">
								<td>                                    
                                </td>
								<td style="width: 500px;">
                       INSTANCIAS ATIVAS METALICO MS 
                         </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/Instancias ativas Metalico MS.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data800D}";?></span></td>
							</tr>

              <tr class="tr_correoCli" id="" style="">
								<td>                                    
                                </td>
								<td style="width: 500px;">
                       CONTATOS MASSIVO 
                         </td>
								<td>
                                    <a class="text-sm-center text-md-center"  href="BASES_VIVO/CONTATOS MASSIVO.xls" download="" class="btn btn-primary fas fa-cloud-download-alt D_acumulativos"> Baixar</a>
                                </td>
                <td><span class="text-sm-center text-md-center" ><?php echo "Atualizado: -- {$data0800E}";?></span></td>
</tr>


											</table>
			</div>
      </br>
</br>
</br>
</br> 
</br> 
</br> 
</br> 
</br> 
</br> 
</br> 
		</div>
          
    
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
