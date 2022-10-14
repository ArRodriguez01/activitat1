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
    <form action="?url=registeraction" method="POST">
        <input name="mail" placeholder="mail" id="mail" type="mail">
        <br>
        <input name="password" placeholder="contraseña" id="passwd" type="password">
        <br>
        <input name="uname" placeholder="NombreUser" id="uname" type="text">
        <br>
        <select name="rol" id=rol>
            <option value="alumno">Alumno</option>
            <option value="profesor">Profesor</option>
        </select>
        <br>
        <br>
        <button id="send">REGISTRATE</button>
    </form>
</body>
</html>