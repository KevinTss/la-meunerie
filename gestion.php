
<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>
                
<section id="gestion">
   
   <div>
    
        <h1>Administration</h1>

       <div>
          
          <?php
           
           if( $_SESSION['is_connect'] /*and $_SESSION['pass'] == */ ){
           
           ?>
           
            <h2>Hebdo</h2>

           <form class="crud" action="" method="post">

            <?php

                if(isset($_POST['modif'])){

                    echo '<input type="input" name="valeur" value="'.recup('hebdos', 'lien').'"><br>';
                    echo '<input type="submit" value="Valider" class="bouton">';

                }
                else{

                    if(isset($_POST['valeur'])){

                        // aller remplacer dans la BD
                        
                        update("hebdos", "lien", $_POST['valeur'], "ID_hebdo", "1");

                    }

                    echo recup('hebdos', 'lien');
                    echo '<input type="hidden" name="modif">';
                    echo '<br><input type="submit" value="Modifier" class="bouton">';

                }

            ?>    

            </form>

        </div>
        
        <hr>
        
        <div>
            
            <h2>Menus</h2>
            
            <form class="crud" action="" method="post">
               
               <table id="gestion_four">
               
<!--                   <tr><td>Nom</td><td>Lien</td></tr>-->
                   <?php
                   
                    
                   
                    if(isset($_POST['modif_menu'])){
                        
                        //echo $nom[0];
                        recup_menu();
                        
                        echo '<tr><td><input type="text" name="nom1" value="'.$nom[0].'"></td><td><input type="text" name="lien1" value="'.$lien[0].'"></td></tr>';
                        echo '<tr><td><input type="text" name="nom2" value="'.$nom[1].'"></td><td><input type="text" name="lien2" value="'.$lien[1].'"></td></tr>';
                        echo '<tr><td colspan="2"><input type="submit" value="Valider" class="bouton"></td></tr>';
                        
                    }
                    else{
                        
                        if(isset($_POST['nom1']) and isset($_POST['nom2']) and isset($_POST['lien1']) and isset($_POST['lien2'])){

                            // aller remplacer dans la BD
                            //update_lien_menu($_POST['nom1'],$_POST['nom2'],$_POST['lien1'],$_POST['lien2']);
                            //retour_gestion();
                            
                            update("menus", "nom", $_POST['nom1'], "ID_menus", "1");
                            update("menus", "nom", $_POST['nom2'], "ID_menus", "2");
                            update("menus", "lien", $_POST['lien1'], "ID_menus", "1");
                            update("menus", "lien", $_POST['lien2'], "ID_menus", "2");

                        }
                        
                        recup_menu();
                        
                        echo '<tr><td>'.$nom[0].'</td><td>'.$lien[0].'</td></tr>';
                        echo '<tr><td>'.$nom[1].'</td><td>'.$lien[1].'</td></tr>';

                        echo '<tr><td colspan="2"><input type="hidden" name="modif_menu"><input type="submit" value="Modifier" class="bouton"></td></tr>';
                        
                    }
                   
                   ?>
                
                </table>
                
            </form>
            
        </div>
        
        <hr>
        
        <div>
            
            <h2>Expo</h2>
            
            <form class="crud" action="" method="post">

            <?php

                if(isset($_POST['modif2'])){

                    echo 'Nom : <input type="input" name="valeur6" value="'.recup('expos', 'nom').'"><br>';
                    echo 'Lien : <input type="input" name="valeur2" value="'.recup('expos', 'lien').'"><br>';
                    echo '<input type="submit" value="Valider" class="bouton">';

                }
                else{

                    if(isset($_POST['valeur2']) and isset($_POST['valeur6'])){

                        // aller remplacer dans la BD
                        //update_lien_expos($_POST['valeur2']);
                        
                        update("expos", "lien", $_POST['valeur2'], "ID_expo", "1");
                        update("expos", "nom", $_POST['valeur6'], "ID_expo", "1");

                    }

                    echo 'Nom :<br>'.recup('expos', 'nom').'<br>';
                    echo '<br>Lien :<br>'.recup('expos', 'lien').'<br>';
                    echo '<input type="hidden" name="modif2">';
                    echo '<br><input type="submit" value="Modifier" class="bouton">';

                }

            ?>    

            </form>
            
        </div>
          
        <hr>
           
        <div>
            
            <h2>Forfaits</h2>
            
            <form class="crud" action="" method="post">

            <?php

                if(isset($_POST['modif3'])){

                    echo '<input type="input" name="valeur3" value="'.recup('forfaits', 'lien').'"><br>';
                    echo '<input type="submit" value="Valider" class="bouton">';

                }
                else{

                    if(isset($_POST['valeur3'])){

                        // aller remplacer dans la BD
                        //update_lien_forfait($_POST['valeur3']);
                        
                        update("forfaits", "lien", $_POST['valeur3'], "ID_forfait", "1");

                    }

                    echo recup('forfaits', 'lien');
                    echo '<input type="hidden" name="modif3">';
                    echo '<br><input type="submit" value="Modifier" class="bouton">';

                }

            ?>    

            </form>
            
        </div>
          
        <hr>
           
        <div>
            
            <h2>Chèque cadeaux</h2>
            
            <form class="crud" action="" method="post">

            <?php

                if(isset($_POST['modif4'])){

                    echo '<input type="input" name="valeur4" value="'.recup('cheques', 'lien').'"><br>';
                    echo '<input type="submit" value="Valider" class="bouton">';

                }
                else{

                    if(isset($_POST['valeur4'])){

                        // aller remplacer dans la BD
                        //update_lien_cheque($_POST['valeur4']);
                        
                        update("cheques", "lien", $_POST['valeur4'], "ID_cheque", "1");

                    }

                    echo recup('cheques', 'lien');
                    echo '<input type="hidden" name="modif4">';
                    echo '<br><input type="submit" value="Modifier" class="bouton">';

                }

            ?>    

            </form>
            
        </div>
        
        <?php
       
       }
       
       ?>
    
    </div>
    
</section>

<section id="gestion-photo">
    
    <div class="photo" role="Gallerie photo">
       
       <?php
        
        
            if( !empty($_FILES) ){  // si il y a bien un fichier envoyé
                
                require("module/imgClass.php");
                
                // stockage du fichier dans une variable
                
                $img = $_FILES['img'];
                
                // traitement de l'extension et vérif
                
                $ext = strtolower(substr($img['name'], -3));
                
                $allow_ext = array('jpg', 'png');
                
                if( in_array($ext, $allow_ext) ){
                    
                    move_uploaded_file($img['tmp_name'], "images/gallerie/".$img['name']);
                    Img::creerMin("images/gallerie/".$img['name'], "images/gallerie/min", $img['name'], 215, 115);
                    Img::convertirJPG("images/gallerie/".$img['name']);
                    
                }
                else{
                    
                    $erreur = "image pas dans le bon format";
                    
                }
                
            }
        
            if( isset( $_POST['supImg'] ) ){        // si on supp un photo
                
                echo "<span class=\"msg\">\"".$_POST['nomImg']."\" à bien été supprimée</span>";
                
                unlink("images/gallerie/".$_POST['nomImg']);
                unlink("images/gallerie/min/".$_POST['nomImg']);
                
            }
        
            if( $_SESSION['is_connect'] ){  // affichage du formulaire d'ajout de photo si la personne est connectée
                
                if( isset($erreur) ){
                    
                    echo $erreur;
                    
                }
                
                echo '<form class="formGallery" method="post" action="" enctype="multipart/form-data">'
                    .'<input type="file" name="img">'
                    .'<input type="submit" name="Envoyer">'
                    .'</form>';
                
            }
        
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
                    
                    if( $_SESSION['is_connect'] ){  // si admin -> afficher le bouton de suppression
                        
                        ?>
                        
                        <form method="post" action="">
                            
                            <input type="hidden" name="nomImg" value="<?php echo $file ?>">
                            <input type="submit" name="supImg" value="Supprimer">
                            
                        </form>
                        
                        <?php
                        
                    }
                    
                    echo '</div>';
                    
                }
                
            }
           
        
        
        ?>
       
    </div>
    
</section>

<section id="fournisseurs">
    
    <table>
    
        <?php affiche_fournisseur_admin(); ?>
    
    </table>
    
    <?php

        if( $_SESSION['is_connect'] ){  // si on est connecté
            
            echo '<form action="gestion_fournisseurs.php" method="post">'
                .'<input type="submit" name="ajouter" value="Ajouter">'
                .'</form>';

        }

    ?>
    
</section>

<?php
  
   include 'content/parties/footer.php';
                    
?>