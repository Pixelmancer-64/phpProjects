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
    <main>

        <h1>Registre sua água aqui!</h1>
        <h3>sim, água, a gente estava sem criatividade</h3> 



        <form id="water" action="./comandoinserir.php" method='post'>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id= "nome" placeholder="Nome" required>

            <label for="marca">Marca</label>
            <input type="text" name="marca" id= "marca" placeholder="Marca" required>

            <label for="ml">Ml</label>
            <input type="number" name="ml" id= "ml" placeholder="Ml" required>

            <label for="gas">Gás</label>
            <input type="checkbox" name="gas" id="gas" placeholder="Gás" value= "unchecked" unchecked>

            <label for="ph">Ph</label>
            <input type="number" name="ph" id= "ph" placeholder="Ph" required>

            <label for="origem">Origem</label>
            <input type="text" name="origem" id= "origem" placeholder="Origem" required>

            <button type="submit" id="submit" >ME ENVIE!!</button>
        </form>

    </main>

    <section>
        <?php

            require_once('./conexao.php');

            $comando = "select * from waters";

            $response = $conexao->query($comando)->fetchAll(PDO::FETCH_ASSOC);

                echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Ml</th>
                        <th>Gas</th>
                        <th>Ph</th>
                        <th>Origem</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </tr>
                <tbody>
                <form action='./comandodelete.php' id='deleteForm' method='post'>
                
                ";
                foreach($response as $aux){
                    echo "<tr>
                    <td> {$aux['id']} </td>
                    <td> {$aux['nome']} </td>
                    <td> {$aux['marca']} </td>
                    <td> {$aux['ml']} </td>";

                    if($aux['comGas']){
                        echo"<td> SIM </td>";
                    }
                    else  echo"<td> NÃO </td>";
                    echo"
                    <td> {$aux['ph']} </td>
                    <td> {$aux['origem']} </td>
                    <td><button name='id' type='submit' id='delete' form='deleteForm' value='{$aux['id']}'>X</button></td>
                    <td><button name='id' type='submit' id='edit' formaction='./comandoatualizar.php' formmethod='post' value='{$aux['id']}'><img src='./edit.svg'></button></td>
                    </tr>";
                };

                echo "</form>
                </tbody>
                </table>";
        ?>
    </section>

</body>
</html>