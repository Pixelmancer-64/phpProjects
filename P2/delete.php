<?php

require_once('./conexao.php');

    $conexao = new PDO($dsn, $user, $password);
    $retorno = $conexao->exec("delete from books where id = {$_GET['id']}");  
    if($retorno == false){
        echo 'Deu algum erro rapaz, vai lá saber o que é...';
    } else {
        echo "foram excluidas {$retorno} linhas";
        header('Location: ./index.php');
    }
?>