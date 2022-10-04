<?php
    require 'src/db.php';
    // coger $_REQUEST['mail'] y ['password']
    // comprobar si existen
    // Si existe => dashboard y abrir sesion user
    // Si no existe => volver a home o formulario
    $db=connectMysql($dsn,$dbuser,$dbpass);
    if(!empty($_POST['mail'])&& !empty($_POST['password'])){
        if(isset($_POST['mail'])&&isset($_POST['password'])){
            $mail=$_REQUEST['mail'];
            $passwd=$_REQUEST['password'];
            if(auth($db,$mail,$passwd)){
                // guardar sesion
                //redirigir otro sitio
            }
            
        }
    }