<nav>
        <?php if(!isset($_SESSION['user'])):?>
        <a href="?url=login">Login</a>
        <?php else:?>
        <a href="?url=logout">Logout <?=$_SESSION['user']->uname;?></a>
        <a href="?url=dashboard">Home</a>
        <?php endif;?>
        <a href="?url=register">Register</a>
        <select name="idioma" id=idioma> 
            <option value="español">Español</option>
            <option value="catalan">Catalan</option>
        </select>
        
        
</nav>