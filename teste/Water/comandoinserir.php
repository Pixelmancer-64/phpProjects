<?php
    require_once('conexao.php');
    $comando = "INSERT into waters (nome, marca, ml, comGas, ph, origem) values (:nome, :marca, :ml, :comGas, :ph, :origem)";
    $stmt = $conexao->prepare($comando);
    $stmt->bindValue(':nome', $_POST['nome']);
    $stmt->bindValue(':marca', $_POST['marca']);
    $stmt->bindValue(':ml', $_POST['ml']);
    print_r($_POST);
    if (isset($_POST['gas']))
    {
        $stmt->bindValue(':comGas', 1);
    } else $stmt->bindValue(':comGas', 0);

    $stmt->bindValue(':ph', $_POST['ph']);
    $stmt->bindValue(':origem', $_POST['origem']);
    try{
        foreach($_POST as $u){
            if(empty($u)) {
                throw(new Exception("Campo ${u} não preenchido. (A gente sabe da sua safadeza, viu? Aprendemos com voce)"));
            }
        };
        $stmt->execute();
        header('Location: ./index.php');
        print_r($_POST);
    }
    catch(PDOException $e){
        echo "{$e->getCode()} <br> {$e->getMessage()}";
        print_r($_POST);
    }
?>