<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .active{
        color: white;
        background-color:  	rgb(68, 68, 68);
    }
</style>
<body>
    <header>
    <h1 onclick="fiesta()" ondblclick="noMoreFiesta()">JAVASCRIPT É ESTRANHO</h1>
</header>
    <form action='formu.php' method="post">
        
  <fieldset>
      
      <legend>Contato</legend>
      <label for="email">Email:</label>
        <input
        type="email"
        id="email"
        name="email"
        autocomplete="email"
        placeholder="Email"
        autofocus
        />
<br/>
<br/>
        <label for="name">Name:</label>
        <input type="text" id="user" name= "user" placeholder="Name"  minlength="3"  autocomplete="on">  
        <br/>
        <br/>
        <label for="color">Favourite color:</label>
        <input type="color" id="color" name="color" list="colors"/>
        <label for="statusCheck">
            <br/>
            <br/>
           <label for="statusCheck"> How are you?</label>
           <select name="status" id="status">
               <option id="" disabled selected hidden>Select an option</option>
               <option id="haha">I'm good, thanks for asking</option>
               <option id="hehe">I'm fine, nothing special</option>
            <option id="huhu">I'm not in a good mood today</option>
           </select>
        <br/>
        <br/>

        <label for="message">Send me your message:</label>
        <textarea id=message name="message" maxlength="300" rows="5" cols="25">I love you Hugo</textarea>
        <br/>
        <br/>
        <button id="formu" name="formu "type="submit">Enviar</button>
    </fieldset>
</form>

<?php
include("formu.php");
?>
</body>
<script src="./script.js"></script>
</html>