
<?php

    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

//    session_start();
//
//    include 'module/update_donnees.php';
//    include 'module/mail_contact.php';
//    include 'module/mail_resa.php';

?>



<!DOCTYPE html>
<html lang="fr-FR">

	<head>

        <title>La Meunerie</title>
		
		<meta charset="utf-8" />
		
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="javascript/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="module/Zoombox/zoombox.js"></script>
        
        <link href="module/Zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
        
        
        <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 600,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
        </script>
        
	</head>
	
	<body>
	    
	    <div class="wrapper">
   
            <div class="container">
                
<div class="content">
        
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
        
            if( $_SESSION['is_connect'] ){
                
                if( isset($erreur) ){
                    
                    echo $erreur;
                    
                }
                
                echo '<form method="post" action="" enctype="multipart/form-data">'
                    .'<input type="file" name="img">'
                    .'<input type="submit" name="Envoyer">'
                    .'</form>';
                
                
            }
        
            $dos = "images/gallerie/min";
            $dir = opendir($dos);
        
            while( $file = readdir($dir) ){
                
                $allow_ext = array('jpg', 'png');
                
                $ext = strtolower(substr($file, -3));
                
                if( in_array($ext, $allow_ext) ){
                    
                    echo '<div class="min">'
                        .'<a href="images/gallerie/'.$file.'" rel="zoombox[galerie]" class="zoombox zgallery1">'
                        .'<img src="images/gallerie/min/'.$file.'" alt="'.$file.'">'
                        .'<h3>'.$file.'</h3>'
                        .'</a>'
                        .'</div>';
                    
                }
                
            }
           
        
        
        ?>
       
       
       
       
       
        
 
    </div>

</div>

                    <footer>

                       <section id="footer">
                           
                           <p id="copy">
                               
                                <?php 

                                    if($_SESSION['is_connect']){ 

                                        echo '<a href="deconnexion.php">Se déconnecter</a>'; 

                                    } 
                                    else{

                                        echo '<a href="connexion.php">Connexion</a>';

                                    }

                                ?><!--     
                                 --> - Copyright &copy; La Meunerie since 2016

                            </p>
                           
                       </section>

                    </footer>

                </div>

            </div>
            
            
		</div>
		
		
	</body>
	
</html>


<?php

    //session_destroy();

?>

