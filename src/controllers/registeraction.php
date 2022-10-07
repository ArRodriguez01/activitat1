<?php
    require 'src/db.php';
    // coger $_REQUEST['mail'] y ['password']
    // comprobar si existen
    // Si existe => dashboard y abrir sesion user
    // Si no existe => volver a home o formulario
    $db=connectMysql($dsn,$dbuser,$dbpass);
    if(isset($_POST['mail'])&&isset($_POST['password'])&&isset($_POST['uname'])){
        if(filter_input(INPUT_POST,'mail') && filter_input(INPUT_POST,'password')&& filter_input(INPUT_POST,'uname')){
        
            $mail=$_REQUEST['mail'];
            $passwd=$_REQUEST['password'];
            $uname=$_REQUEST['uname'];
            if(registeruser($db,$mail,$passwd,$uname)){
                header('Location:?url=registergood');
            }else{
                header('Location:?url=register');
            }
        }

    }