<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Waters</title>
</head>
<body>
    <?php
        require_once('conexao.php');
        $comando = "select * from waters where id= ${_POST['id']}";
        $response = $conexao->query($comando)->fetch(PDO::FETCH_ASSOC);
    ?>
    <main>
        <form id="water" action="./comandoupdate.php" method='post'>
            <label for="nome">Nome</label>
            <input type="text" class="book-input" value=<?php echo "'${response['nome']}'"; ?> name="nome" id= "nome" placeholder="Nome" required>

            <label for="marca">Marca</label>
            <input type="text" class="book-input" value=<?php echo "'${response['marca']}'"; ?> name="marca" id= "marca" placeholder="Marca" required>

            <label for="ml">Ml</label>
            <input type="number" class="book-input" value=<?php echo "'${response['ml']}'"; ?> name="ml" id= "ml" placeholder="Ml" required>

            <label for="gas">Gás</label>
            <input type="checkbox" class="book-input"
            <?php 
                if($response['comGas'] == true){
                    echo 'checked';
                } else echo 'unchecked';
            ?>
            name="gas" id= "gas" placeholder="Gás">
            <br/>
            <br/>

            <label for="ph">Ph</label>
            <input type="number" class="book-input" value=<?php echo "'${response['ph']}'"; ?> name="ph" id= "ph" placeholder="Ph" required>

            <label for="origem">Origem</label>
            <input type="text" class="book-input" value=<?php echo "'${response['origem']}'"; ?> name="origem" id= "origem" placeholder="Origem" required>

            <button type="submit" id="submit" value=<?php echo "'${response['id']}'"; ?> name="id">ENVIAR</button>
        </form>

    </main>

</body>
</html>