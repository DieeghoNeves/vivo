<?php
include 'conexao.php'; 

error_reporting(~E_NOTICE);
session_start();

if(!isset($_SESSION["nome"])){
    header ("location: sair.php");
    exit;
}

$_SESSION['msgError'] = "";
$_SESSION['msg'] = "";

$estrela = filter_input(INPUT_GET,'estrela',FILTER_VALIDATE_INT);
$dados = filter_input_array(INPUT_GET,$_GET);

$estrela = validaEstrelas($estrela);
$dadosValidado = validaDados($dados);

if(!$estrela){
	$_SESSION['msgError'] ="É necessário selecionar pelo menos 1 estrela";
	?><script>window.history.back();</script><?php
}

//verifica se todos os dados foram preenchdidos ( inclusive as 3 imagens), ou 
//se pelo menos 1 imagem foi anexada junto as demais informações
if((!$dadosValidado && ($dados['file1'] != "" || $dados['file2']!= '' || $dados['file3']!= '')) || $dadosValidado){
	//Salvar no banco de dados
	$insere = "INSERT INTO ... VALUES (...)";
	$result = mysqli_query($conn, $insere);
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "Vistoria cadastrada com sucesso.";
		header("Location: vistorias.php");
	}else{
		$_SESSION['msgError'] = "Erro ao cadastrar a vistoria. Por favor, tente novamente.";
		?><script>window.history.back();</script><?php
	}


}else{
	var_dump($dados);
	echo $dados;
	$_SESSION['msgError'] = "É necessário preencher todas as informaçoes do formulário e anexar pelo menos 1 imagem.";
	?><script>window.history.back();</script><?php
}


//função para validar se a estrela foi selecionada
function validaEstrelas($estrela){

	if(!empty($estrela)){
        return true;
    }

    return false;

}

//funcao para validar se todos os campos foram preenchidos
function validaDados($dados){

	foreach($dados as $chave => $array){
		
		foreach($array as $key => $valores){
			
			if($valores!= ""){
				return true;
			}else{
				return false;
			}

		}

	}
}

?>