<?php 
    session_start();
    require('header.php');
    if(isset($_SESSION['aviso'])){
        echo $_SESSION['aviso'];
        $_SESSION['aviso']='';
    }
?>
<form method="POST" action="recebedor.php">
    <label>
    Nome:
    <br/>
    <input type="text" name="nome">
    </label>
    <br/>
    <br/>
    <label>
   Email:
    <br/>
    <input type="email" name="email">
    </label>
    <br/>
    <br/>
    <label>
    Idade:
    <br/>
    <input type="number" name="idade">
    </label>
    <input type="submit" value="Enviar">
</form>
<a href="apagar.php">Apagar Cookies</a>