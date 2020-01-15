<nav id="navigation">

    <a class="head__icon" id ="head__icon" href="#"></a>
    <a class="head__logo" href="index.php"><img src="images/logo/Meunerie_blanc_degrade.png" alt="Logo La Meunerie"></a>

    <div class="menu">

        <ul class="menu-base">

            <li><a href="index.php">Accueil</a></li><!--
            --><li><a href="resa.php">Réservation</a></li><!--
            --><li><a href="index.php#hebdo-resa">Menus</a></li><!--
            --><li><a href="banquets.php">Banquets</a></li><!--
            --><li><a href="cadeau.php">Chèques-Cadeaux</a></li><!--
            
            --><?php 
                            
                if($_SESSION['is_connect']){ 

                    echo '<li><a href="gestion.php"><img src="images/glyphicons/cogwheels.png" alt="Gérer"></a></li>'; 

                } 

            ?><!--
            
            --><li><a href="https://www.facebook.com/La-Meunerie-192671940772509/" target="_blank"><img src="images/glyphicons/facebook.png" alt="Facebook La Meunerie"></a></li>
            
        </ul>

    </div>

</nav>

<div class="site_content">