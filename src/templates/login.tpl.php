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
    <?php if(!isset($_COOKIE["cookmail"])&&!isset($_COOKIE["cookpassword"])&&!isset($_COOKIE["cookuser"])):?>
        <form action="?url=logaction" method="POST">
        <input name="mail" placeholder="mail" id="mail" type="mail">
        <br>
        <input name="password" placeholder="contraseña" id="passwd" type="password">
        <br>
        <label>Recuerdame en este equipo</label>
        <input name="remember" id="recordar" type="checkbox">
        <button id="send">ENVIAR</button>
    </form>
    <?php else:?>
        <p>Tiene una cookie del user: <?=$_COOKIE["cookuser"];?> de la ultima sesión:<?=date('l,d,F Y;H:i:s');?></p>
        <form action="?url=cookie" method="POST">
        <button name="login" value="">Iniciar sesión</button>
        <button name="destroy" value="">No logear</button>
        </form>
        <?php endif;?>
    
</body>
</html>