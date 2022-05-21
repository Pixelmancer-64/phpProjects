<?php

    $dsn = "mysql:host=localhost;port=3306;dbname=p2php";
    $user = "Hugo";
    $password = "jjJG5tZ3mgknET";

    try{
        $conexao = new PDO($dsn, $user, $password);
        // echo "<hr><pre>";
        // var_dump($conexao);
        // echo"</pre>";

    } catch(PDOException $e){
        echo "<hr><pre>";
        print_r($e);
        echo"</pre>";
    }
   
?>