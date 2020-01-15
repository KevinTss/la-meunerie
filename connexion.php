<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>


<section id="connect">

    <form id="connect" action="verif_connect.php" method="post">

        <input type="mail" name="mail" placeholder="E-mail"><br>
        <input type="password" name="pass" placeholder="Mot de passe"><br>

        <input type="submit" value="Se connecter">

    </form>

</section>
                    
                    
                    
<?php
  
   include 'content/parties/footer.php';
                    
?>