<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="https://raw.githubusercontent.com/Sotiris64/Sotiris64.github.io/master/img/favicon.png" type="image/x-icon"/>
    <title>The Cooler ToDoList</title>
</head>
<body>
    
<main>
    <div class='inputs'>
    <form method="POST" action="./insert.php">
        <label for="title">Title</label>
        <input type="text" class="book-input" name="title" id= "title" placeholder="Title" required>
            <hr>
        <label for="author">Author</label>
        <input type="text" class="book-input" name="author" id= "author" placeholder="Name" required>
            <hr>
        <label for="surName">Surname</label>
        <input type="text" class="book-input" name="surName" id= "surName" placeholder="Surname" required>
            <hr>
        <label for="date">Published on</label>
        <input type="date" class="book-input" name="date" id= "date" placeholder="Publish date" required>
            <hr>

        <button type="submit" value="Add Book" id="subBook" class="button-82-pushable" role="button">
            <span class="button-82-shadow"></span>
            <span class="button-82-edge"></span>
            <span class="button-82-front text">
                Add Book
            </span>
        </button>
        <button type="submit" value="Add Book" id="subBook" class="doom" formaction='./deleteAll.php' formnovalidate role="button">Delete All</button>
    </form>
    </div>
    
    <div class="table">
        <?php

        require_once('./conexao.php');

            $conexao = new PDO($dsn, $user, $password);
            $comando = "select * from books";

            $stmt = $conexao->prepare($comando);
            $stmt->execute();

            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        ?>
    </div>
</main>

</body>
</html>