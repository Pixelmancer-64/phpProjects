<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://raw.githubusercontent.com/Sotiris64/Sotiris64.github.io/master/img/favicon.png" type="image/x-icon"/>
    <title>The Cooler ToDoList</title>
</head>
<body>
    
<?php

require_once('./conexao.php');

$comandoSec = "select * from books where id = {$_GET['id']}";

    $stmt = $conexao->prepare($comandoSec);
    $stmt->execute();

    $response = $stmt->fetch(PDO::FETCH_ASSOC);

    $titulo = ($response['titulo']);
    
echo "<main>
<div class='inputs'>
    <form method='POST' action='./updateForReal.php'>
        <label for='id'>ID</label>
        <input type='text' class='book-input' name='id' id='id' placeholder='ID' value={$_GET['id']} required>
            <hr>
        <label for='title'>Título</label>
        <input type='text' class='book-input' name='title' id='title' placeholder='Title' value='{$response['titulo']}' required>
            <hr>
        <label for='author'>Autor</label>
        <input type='text' class='book-input' name='author' id= 'author' placeholder='Link' value='{$response['autor_nome']}' required>
            <hr>
        <label for='surName'>Sobrenome</label>
        <input type='text' class='book-input' name='surName' id= 'surName' placeholder='Link Title' value='{$response['autor_sobrenome']}' required>
            <hr>
        <label for='date'>Publicação</label>
        <input type='date' class='book-input' name='date' id='date' placeholder='Link Title' value='{$response['publicacao']}' required>
            <hr>

        <button type='submit' value='Add Book' id='subBook' class='button-82-pushable' role='button'>
            <span class='button-82-shadow'></span>
            <span class='button-82-edge'></span>
            <span class='button-82-front text'>
                Edit book
            </span>
        </button>
    </form>
    </div>";
?>


</main>

</body>
</html>