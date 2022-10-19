
<nav>

<?php if(!isset($_SESSION['user'])):?>
        <a href="?url=login">Login</a>
        <a href="?url=register">Register</a>
        <?php else:?>
        <a href="?url=logout">Logout <?=$_SESSION['user']->uname;?></a>
        <a href="?url=dashboard">Home</a>
        <section class="menu__container">
        <li class="menu__item menu__item--show">
                    <div><a href="#" class="menu__link">User<img src="../../../public/assets/arrow.svg" class="menu__arrow"></a></div>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Settings</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 2</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 3</a>
                        </li>
                    </ul>
        <div class="menu__hamburguer">
                <img src="assets/menu.svg" class="menu__img">
            </div>
        </li>
        </section>
        <?php endif;?>    
</nav>