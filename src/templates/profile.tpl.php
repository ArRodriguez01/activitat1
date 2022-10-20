<?php
    include 'partials/header.tpl.php';
    ?>
<body>
    <header>
        <h1><?=$title;?></h1>
        <hr>
    </header>
<?php
    include 'partials/nav.tpl.php';
?>
    <div>
    <h2>Detalles de usuario</h2><br>
    Nombre: <?=$_SESSION['user']->uname;?><br>
    Correo: <?=$_SESSION['user']->email;?><br>
    Rol:    <?=$_SESSION['user']->rol;?>
    </div>
</body>
</html>