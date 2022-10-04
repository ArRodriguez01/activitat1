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
    <form action="?url=logaction" method="POST">
        <input name="mail" placeholder="mail" id="mail" type="mail">
        <br>
        <input name="password" placeholder="contraseña" id="passwd" type="password">
        <br>
        <button id="send">ENVIAR</button>
    </form>
</body>
</html>