<?php
date_default_timezone_set('America/Campo_Grande');
session_start();
include_once("conexao.php");

	$inst = filter_input(INPUT_POST, 'inst', FILTER_SANITIZE_STRING);
	$resp = filter_input(INPUT_POST, 'resp', FILTER_SANITIZE_STRING);
    $desig = filter_input(INPUT_POST, 'desig', FILTER_SANITIZE_STRING);
    $indic = filter_input(INPUT_POST, 'indic', FILTER_SANITIZE_STRING);
    $eps = filter_input(INPUT_POST, 'eps', FILTER_SANITIZE_STRING);
    $id_pon = filter_input(INPUT_POST, 'id_pon', FILTER_SANITIZE_STRING);
    $loc = filter_input(INPUT_POST, 'loc', FILTER_SANITIZE_STRING);
    $segm = filter_input(INPUT_POST, 'segm', FILTER_SANITIZE_STRING);

    //var_dump($_POST); exit;
 
            //echo  $obs_encer; exit;
	//para fazer insert
	if(!empty($inst) AND !empty($resp) AND !empty($desig) AND !empty($indic) AND !empty($eps) AND !empty($id_pon) AND 
    !empty($loc) AND !empty($segm)){
       

        $result_usuario = "INSERT INTO ifi_irr_online (designador, indicador, eps, id_pon, localidade, segmento,usuario_cad, data_lancamento, instancia, responsavel ) 
        VALUES ('{$desig}', '{$indic}', '{$eps}','{$id_pon}','{$loc}','{$segm}','".$_SESSION["nome"]."',now(), '{$inst}', '{$resp}')";
        $resultado_usario = mysqli_query($conn, $result_usuario);
       //echo $result_usuario; exit;
        if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "Cadastrado com sucesso!";
        header("Location: controle_ifi_irr_online.php");
        }else{
        $_SESSION['msg'] = "Erro ao cadastrar!";
        }
    //}else{
       /*     if(!$encerrar) {
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
            }*/
 
    }else{
        $_SESSION['msg'] = "Preencha os campos obrigatorios";
        header("Location: controle_ifi_irr_online.php");
    }
