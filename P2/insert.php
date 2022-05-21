<?php

require_once('./conexao.php');

    $conexao = new PDO($dsn, $user, $password);
    echo "<hr><pre>";
    var_dump($conexao);
    $comando = "Insert into books(titulo, autor_nome, autor_sobrenome, publicacao) values(:titulo, :autor_nome, :autor_sobrenome, :publicacao)";

    foreach($_POST as $e){
        if(empty($e)) {
            die("Campo não preenchido");
        }
    };

    $stmt = $conexao->prepare($comando);

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