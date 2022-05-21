<?php
echo "<table>
                <tr>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Date</th>
                    <th>Date</th>
                    <th>Excluir</th>
                    <th>Editar</th>

                </tr>
            <tbody>
            <form method='GET' action='./delete.php'>";

            foreach($response as $aux){
                echo "<tr>
                <td> {$aux['titulo']} </td>
                <td> {$aux['autor_nome']} </td>
                <td> {$aux['autor_sobrenome']} </td>
                <td> {$aux['publicacao']} </td>
                <td><button name='id' type='submit' class='delete-item' value='{$aux['id']}'>X</button></td>
                <td><button name='id' type='submit' class='edit-item' formaction='./update.php' value='{$aux['id']}'>E</button></td>
                </tr>";
            };

            echo "</form>
            </tbody>
            </table>";