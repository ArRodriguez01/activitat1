<?php
    include 'partials/header.tpl.php';
    ?>
<body>
    <header>
        <h1><?=$title;?><?=$_SESSION['user']->uname;?></h1>
        <hr>
    </header>
<?php
    include 'partials/nav.tpl.php';
?>
</body>
</html>