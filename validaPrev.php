<?php
date_default_timezone_set('America/Campo_Grande');
session_start();
include_once("conexao.php");

	$inst = filter_input(INPUT_POST, 'inst', FILTER_SANITIZE_STRING);
	$tec = filter_input(INPUT_POST, 'tec', FILTER_SANITIZE_STRING);
    $end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
    $eps = filter_input(INPUT_POST, 'eps', FILTER_SANITIZE_STRING);
    $ctto = filter_input(INPUT_POST, 'ctto', FILTER_SANITIZE_STRING);
    $loc = filter_input(INPUT_POST, 'loc', FILTER_SANITIZE_STRING);
    $det = filter_input(INPUT_POST, 'det', FILTER_SANITIZE_STRING);
    $tecnol = filter_input(INPUT_POST, 'tecnol', FILTER_SANITIZE_STRING);
    $obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);
    $mat = filter_input(INPUT_POST, 'mat', FILTER_SANITIZE_STRING);
    $valid = filter_input(INPUT_POST, 'hidden', FILTER_VALIDATE_BOOLEAN);
    $id_atv = filter_input(INPUT_POST, 'id_atv', FILTER_VALIDATE_INT);
    $encerrar = filter_input(INPUT_POST, 'encerrar', FILTER_VALIDATE_INT);
    $obs_encer = filter_input(INPUT_POST, 'obs2', FILTER_SANITIZE_STRING);
 
            //echo  $obs_encer; exit;
	//para fazer insert
	if(!empty($inst) AND !empty($end) AND !empty($eps) AND !empty($loc) AND !empty($det) AND !empty($tecnol) AND !empty($obs)){
       
        if(!$valid){
            $status = "aberto";
            
            if(!empty($tec) AND !empty($mat) AND !empty($ctto))
            {
            
                $obrigatorio = ",tec_executor, ctto_tec, matricula, data_atribuicao, operador2"; 
                $status = "atribuido";
                $restante = ",'{$tec}', '{$ctto}', '{$mat}','".date("Y-m-d H:i:s")."','".$_SESSION["nome"]."'";

            }

            $result_usuario = "INSERT INTO preventivas (instancia, endereco, localidade, operador1, data_abertura, observacoes,
            `status`, detalhe_atividade, tecnologia, eps {$obrigatorio} ) VALUES (
                    '{$inst}', '{$end}', '{$loc}',";
            $result_usuario.= "'".$_SESSION["nome"]."'";
            $result_usuario.=",now() , '{$obs}', '{$status}', '{$det}', '{$tecnol}','{$eps}' {$restante} )";
        $resultado_usario = mysqli_query($conn, $result_usuario);
        if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "Preventiva aberta";
        header("Location: preventivas.php");
        }else{
        $_SESSION['msg'] = "Erro ao abrir preventiva";
        }
    }else{
            if(!$encerrar) {
                if(!empty($tec) AND !empty($mat) AND !empty($ctto))
                {
                    $update = "update preventivas set tec_executor='$tec', matricula='$mat', ctto_tec='$ctto', status='atribuido',
                    data_atribuicao='".date("Y-m-d H:i:s")."', operador2='".$_SESSION["nome"]."'where id_atividade = $id_atv";

                    $resultado_usario = mysqli_query($conn, $update);
                    if(mysqli_affected_rows($conn)){
                        header("Location: lista_atividades.php");
                    }
                }  // para fazer update e encerrar
            }else{
                $update = "update preventivas set data_fechamento='".date("Y-m-d H:i:s")."', status = 'encerrado', observacoes_encer = '$obs_encer' where id_atividade = $id_atv";
                $resultado_usario = mysqli_query($conn, $update);
                if(mysqli_affected_rows($conn)){
                    header("Location: lista_atividades.php");
                }
            }
    }
}else{
	$_SESSION['msg'] = "Preencha os campos obrigatorios";
	header("Location: preventivas.php");
}
