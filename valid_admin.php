<?php
        date_default_timezone_set('America/Campo_Grande');
        session_start();
        include_once("conexao.php");

            $situacao[] = $_GET['situacao'];
            var_dump($_GET);
            echo $situacao;

?>