<?php
session_start();
include_once("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, email, senha, situacao, if(perfil = 1, 'Administrador','') as perfil, eps, funcao FROM usuarios WHERE (usuario='$usuario' or email='$usuario' )LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			// testa se usuario esta liberado ou bloqueado
			if ($row_usuario['situacao'] !=  '1' ){
				$_SESSION['msg'] = "Usuario bloqueado, solicite o debloqueio pelo WhatsApp Reginaldo 67 9695-4878 ou Felipe 67 9100-4805";
				header("Location: index.php");	
			}elseif(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				$_SESSION['perfil'] = $row_usuario['perfil'];
				$_SESSION['eps'] = $row_usuario['eps'];
				$_SESSION['funcao'] = $row_usuario['funcao'];
				header("Location: inicio.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: index.php");
}
