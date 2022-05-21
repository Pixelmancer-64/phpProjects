<?php

$dsn = "mysql:host=localhost;port=3306;dbname=udemycourse";
$user = "Hugo";
$password = "jjJG5tZ3mgknET";

try{
        $conexao = new PDO($dsn, $user, $password);
        echo "<hr><pre>";
        var_dump($conexao);
        $comando = "Select * from books order by pages";
        $retorno = $conexao->query($comando);  
        $ha = $retorno->fetchAll(PDO::FETCH_OBJ);
        foreach($ha as $aux){
            print_r($aux);
        }
        echo"</pre>";

} catch(PDOException $e){
    echo "<hr><pre>";
     print_r($e);
    echo"</pre>";
}


?>