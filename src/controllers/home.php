<?php
    //render template home
    require 'src/render.php';
    $title="Superman";
    $alumnes=[
        'Perico Palotes',
        'Manolo el del bombo',
        'EL bicho'
    ];
    echo render('home',['title'=>'Superman','alumnes'=>$alumnes]);