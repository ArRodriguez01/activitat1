<?php
    //render template home
    require 'src/render.php';
    $title="COLEGIO IT";
    
    echo render('home',['title'=>$title]);