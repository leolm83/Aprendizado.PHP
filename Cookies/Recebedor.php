<?php 
    session_start();
    $nome=filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST,"idade",FILTER_VALIDATE_INT);
    //Se nome existir entao:
    if($nome && $email && $idade){
        //86400ms equivale a 1 dia entao 30x1 dia
        setcookie('nome',$nome,time()+86400*30);
        echo 'Nome : '.$nome."<br/>";
        echo 'Email : '.$email."<br/>";
        echo 'Idade : '.$idade; 
    }
    else {
        $_SESSION['aviso']= 'Por Favor Preencha Os Campos Corretamente!';
        header("Location: index.php");
        exit;
    }