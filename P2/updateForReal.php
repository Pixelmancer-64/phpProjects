<?php

require_once('./conexao.php');

    $conexao = new PDO($dsn, $user, $password);
    echo "<hr><pre>";

    $comando = "update books set id= :ID, titulo = :titulo, autor_nome = :autor_nome, autor_sobrenome = :autor_sobrenome, publicacao = :publicacao where id = {$_POST['id']}";

    foreach($_POST as $e){
        if(empty($e)) {
            die("Campo não preenchido");
        }
    };

    $stmt = $conexao->prepare($comando);

    $stmt->bindValue(':ID', $_POST['id']);
    $stmt->bindValue(':titulo', $_POST['title']);
    $stmt->bindValue(':autor_nome', $_POST['author']);  
    $stmt->bindValue(':autor_sobrenome', $_POST['surName']);  
    $stmt->bindValue(':publicacao', $_POST['date']);  

    $stmt->execute();
    $ha = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($ha as $aux){
        print_r($aux);
    }

    echo"</pre>";
    header('Location: ./index.php');
?>