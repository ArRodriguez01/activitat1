<?php
    
    session_start();
    //configuracion entorno
    require 'config.php';
    require 'src/router.php';
    require 'src/routes.php';
    //enrutament
    $controlador=getRoute($routes);
    require 'src/controllers/'.$controlador.'.php';
    //call controller

?>