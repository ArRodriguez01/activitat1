<nav>
        <?php if(!isset($_SESSION['user'])):?>
        <a href="?url=login">Login</a>
        <a href="?url=register">Register</a>
        <?php else:?>
        <a href="?url=logout">Logout <?=$_SESSION['user']->uname;?></a>
        <a href="?url=dashboard">Home</a>
        <label for="dog-names">Choose a dog name:</label>
<select name="dog-names" id="dog-names">
    <option value="rigatoni">Rigatoni</option>
  <option value="dave">Dave</option>
  <option value="pumpernickel">Pumpernickel</option>
  <option value="reeses">Reeses</option>
</select>
        <?php endif;?>
        
        
        
</nav>