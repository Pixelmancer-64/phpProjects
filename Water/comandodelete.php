<?php
    require_once('conexao.php');
    $comando = "DELETE FROM waters WHERE id= :ID";
    $stmt = $conexao->prepare($comando);
    $stmt->bindValue(':ID', $_POST['id']);
    try{
        $stmt->execute();
        header('Location: ./index.php');
    }
    catch(PDOException $e){
        echo "{$e->getCode()} <br> {$e->getMessage()}";
        print_r($_POST);
    }
?>