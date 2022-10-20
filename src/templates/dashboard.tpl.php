<?php
    include 'partials/header.tpl.php';
    ?>
<body>
    <header>
        <h1><?=$title;?><?=$_SESSION['user']->uname;?>(<?=$_SESSION['user']->rol;?>)</h1>
        <br>
        <hr>
    </header>
<?php
    include 'partials/nav.tpl.php';
?>
    <?php if(($_SESSION['user'])->rol=="profesor"):?>
    <h3>Examenes por corregir<h3>
    <?php else:?>
    <h3>Tareas por terminar<h3>
    <?php endif;?>
</body>
</html>