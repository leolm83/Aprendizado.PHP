<?php 
    if(isset($_COOKIE['nome'])){
    $nome=$_COOKIE['nome'];
    echo "<h1>Boas Vindas $nome !</h1>";
    }
    else{
        echo 'Boas Vindas!';
    }