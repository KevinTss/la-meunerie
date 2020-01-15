
<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>
                
<div class="content">
        
    <div class="photo" role="Gallerie photo">
       
       <?php
        
        
//            if( !empty($_FILES) ){  // si il y a bien un fichier envoyé
//                
//                require("module/imgClass.php");
//                
//                // stockage du fichier dans une variable
//                
//                $img = $_FILES['img'];
//                
//                // traitement de l'extension et vérif
//                
//                $ext = strtolower(substr($img['name'], -3));
//                
//                $allow_ext = array('jpg', 'png');
//                
//                if( in_array($ext, $allow_ext) ){
//                    
//                    move_uploaded_file($img['tmp_name'], "images/gallerie/".$img['name']);
//                    Img::creerMin("images/gallerie/".$img['name'], "images/gallerie/min", $img['name'], 215, 115);
//                    Img::convertirJPG("images/gallerie/".$img['name']);
//                    
//                }
//                else{
//                    
//                    $erreur = "image pas dans le bon format";
//                    
//                }
//                
//            }
        
//            if( isset( $_POST['supImg'] ) ){        // si on supp un photo
//                
//                echo "<span class=\"msg\">\"".$_POST['nomImg']."\" à bien été supprimée</span>";
//                
//                unlink("images/gallerie/".$_POST['nomImg']);
//                unlink("images/gallerie/min/".$_POST['nomImg']);
//                
//            }
        
//            if( $_SESSION['is_connect'] ){  // affichage du formulaire d'ajout de photo si la personne est connectée
//                
//                if( isset($erreur) ){
//                    
//                    echo $erreur;
//                    
//                }
//                
//                echo '<form class="formGallery" method="post" action="" enctype="multipart/form-data">'
//                    .'<input type="file" name="img">'
//                    .'<input type="submit" name="Envoyer">'
//                    .'</form>';
//                
//            }
        
            $dos = "images/gallerie/min";
            $dir = opendir($dos);
        
            while( $file = readdir($dir) ){     // affichage des photos du dossier gallerie
                
                $allow_ext = array('jpg', 'png');
                
                $ext = strtolower(substr($file, -3));
                
                if( in_array($ext, $allow_ext) ){
                    
                    echo '<div class="min">'
                        .'<a href="images/gallerie/'.$file.'" rel="zoombox[galerie]" class="zoombox zgallery1">'
                        .'<img src="images/gallerie/min/'.$file.'" alt="'.$file.'">'
                        .'</a>';
                    
                    //if( $_SESSION['is_connect'] ){  // si admin -> afficher le bouton de suppression
                        
                        ?>
                        
                        <!--<form method="post" action="">
                            
                            <input type="hidden" name="nomImg" value="<?php //echo $file ?>">
                            <input type="submit" name="supImg" value="Supprimer">
                            
                        </form>-->
                        
                        <?php
                        
                    //}
                    
                    echo '</div>';
                    
                }
                
            }
           
        
        
        ?>
       
    </div>

</div>

<?php
  
   include 'content/parties/footer.php';
                    
?>