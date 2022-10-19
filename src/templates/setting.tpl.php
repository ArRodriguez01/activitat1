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

<main>
    <h2>Personalización</h2>
    <form action="?url=settingaction" method="POST"> 
    <label>Color fondo</label>
    <select name="colorfondo">
        <option value="blanco">Blanco</option>
        <option value="negro">Negro</option>
    </select>
    <br><button>Guardar</button>
    </form>
</main>
</body>
</html>