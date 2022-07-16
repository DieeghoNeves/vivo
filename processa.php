<?php
	include_once("conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['block']);
	$situacao = (filter_input(INPUT_POST,'acesso',FILTER_SANITIZE_STRING) == 'Desbloquear'? 1 : 0 );
	$status = ($situacao == 1 ? 'Desbloqueado': 'Bloqueado' );

	$result_cursos = "UPDATE usuarios SET situacao = '$situacao' WHERE id = '$id'";
	//echo filter_input(INPUT_POST,'acesso',FILTER_SANITIZE_STRING); exit;
	$resultado_cursos = mysqli_query($conn, $result_cursos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://177.74.128.249:8080/liberacao_acesso.php'>
				<script type=\"text/javascript\">
					alert(\"{$status} com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://177.74.128.249:8080/liberacao_acesso.php'>
				<script type=\"text/javascript\">
					alert(\"Falha ao executar ação.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>