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
                </tr>
            <tbody>";

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

                </tr>";
            };

            echo "</form>
            </tbody>
            </table>";
?>