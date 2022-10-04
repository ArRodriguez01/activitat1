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
    <?php foreach($alumnes as $alumne):?>
            <p><?=$alumne;?></p>
    <?php endforeach;?>
</body>
</html>