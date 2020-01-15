<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

    if( isset($_POST['ajouter']) ){ // si on a appuyé sur 'ajouter'

        echo '<form action="" method="post">'
            .'<input type="text" name="titre" placeholder="Nom">'
            .'<input type="text" name="contact" placeholder="Tel & Mail">'
            .'<input type="text" name="lien" placeholder="lien du site web">'
            .'<input type="submit" name="ajout_four" value="Insérer">'
            .'</form>';

    }
    elseif( isset($_POST['ajout_four']) ){
        
        ajout_four($_POST['titre'], $_POST['contact'], $_POST['lien']);

        echo '<span>Votre fournisseurs à bien été ajouté <a href="fournisseurs.php">Retour</a></span>';
        
    }
    elseif( isset($_POST['supprimer']) ){
        
        echo '<span>Voulez vous vraiment supprimer le fournisseur : '.$_POST['title'].'</span>'
            .'<form action="module/recup_donnees.php" method="post">'
            .'<input type="hidden" name="id" value="'.$_POST['ID'].'">'
            .'<input type="submit" name="sup" value="Oui">'
            .'<input type="submit" name="no-sup" value="Non">'
            .'</form>';
        
    }

    include 'content/parties/footer.php';

?>