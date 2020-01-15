
<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>
                
<section id="fournisseurs">
    
    <h1>Nos fournisseurs</h1>
       
    <table>

        <?php affiche_fournisseur(); ?>

    </table>
        
    <?php

//        if( $_SESSION['is_connect'] ){  // si on est connecté
//
//            echo '<form action="gestion_fournisseurs.php" method="post">'
//                .'<input type="submit" name="ajouter" value="Ajouter">'
//                .'</form>';
//
//        }

    ?>
    
</section>

<?php
  
   include 'content/parties/footer.php';
                    
?>