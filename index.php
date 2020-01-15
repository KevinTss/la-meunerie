
<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>
               
<header id="banner">

    <section id="slider">
		
        <div class="container">
           
            <div class="c_slider"></div>
            
            <div class="slider_content">
               
                <figure>
                   
                    <img src="images/banniere/ban1-1.jpg" alt=""/>
                    <figcaption>Plats gourmands et savoureux !</figcaption>

                </figure><!--
                
                --><figure>
                   
                    <img src="images/banniere/ban2-1.jpg" alt=""/>
                    <figcaption>Parking privé - Terrasse - Jeux pour enfants</figcaption>
                    
                </figure><!--
                
                --><figure>
                   
                    <img src="images/banniere/ban3.jpg" alt=""/>
                <figcaption>Rejoignez-nous sur <a class="lienFB" href="https://www.facebook.com/La-Meunerie-192671940772509/" target="_blank">Facebook</a></figcaption>

                </figure><!--
                
                --><figure>
                   
                    <img src="images/banniere/ban4.jpg" alt=""/>
                    <figcaption>Plats maitrisés aux fil des saisons</figcaption>
                    
                </figure>
                
            </div>
            
        </div>

        <span id="timeline"></span>
        
        <article>
                
            <div><span>Axel et Mireille Letor<br>Rue du Patronage, 1A<br>1476  Houtain-Le-Val</span></div>
            <div><span id="tel">067/77.28.16</span></div>
            <div><span>Fermé dimanche soir, lundi et mardi<br>Samedi midi : réservé aux banquets</span></div>

        </article>
        
    </section>

</header>
   
                
<section id="hebdo-resa">
    
    <div id="content-hebdo-resa">
    
        <div id="hebdo">

            <figure>

                <img src="images/bg/hebdo.jpg" alt="Hebdo">
                <a href="hebdo.php">HEBDOgourmand - Lunch</a>

            </figure>

        </div>

        <div id="resa">

            <figure>

                <img src="images/glyphicons/calendar.png" alt="Calendrier">
                <a href="resa.php">Réserver</a>

            </figure>

        </div>
    
    </div>
    
</section>
 
<section id="menus">
    
    <div id="menus-content">
        
<!--        <h1>Nos Menus</h1>-->
        
        <?php recup_menu(); ?>
        
        <article>
            
            <h2><?php echo $nom[0]; ?></h2>
            <a href="<?php echo $lien[0]; ?>" target="_blank">Voir</a>
            
            
        </article>
        <article>
            
            <h2><?php echo $nom[1]; ?></h2>
            <a href="<?php echo $lien[1]; ?>" target="_blank">Voir</a>
            
        </article>
        
    </div>
    
</section>

<section id="facebook">
   
   <div id="facebook-content">
    
       <div id="in">
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

           <div class="fb-page" data-href="https://www.facebook.com/La-Meunerie-192671940772509/?fref=ts" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        </div>
        
       <div id="contactt">
          
          <h1>Contactez nous</h1>
           
           <form id="contact" action="#contact" method="post"><!-- onsubmit="return verifForm(this)">-->
               
               <input type="text" name="nom" placeholder="Nom & Prénom">
               <br><br>
               <input type="mail" name="mail" placeholder="Mail">
               <br><br>
               <textarea name="message" placeholder="Votre message ici"></textarea>

                <?php

                    if( isset($_POST['envoi']) ){

                        if( empty($_POST['nom']) and empty($_POST['mail']) and empty($_POST['message']) ){

                            echo 'Vous n\'avez pas rempli tout le formulaire';

                        }
                        else{

                            envoi_mail($_POST['mail'], $_POST['message'], $_POST['nom']);
                            echo 'Votre message à bien été envoyé';
                            //echo $txt;

                        }

                    }

                ?>

               <input type="submit" name="envoi" value="Envoyer">

       </form>
           
       </div>
   
    </div>
    
</section>                         

<section id="end">
    
    <div id="end-content">
        
        <article>
            
            <img src="images/bouchon.jpg" alt="">
            <a href="expo.php"><?php echo recup('expos', 'nom'); ?></a>
            
        </article>
        <article>
            
            <img src="images/bouchon.jpg" alt="">
            <a href="gallerie.php">Galerie</a>
            
        </article>
        <article>
            
            <img src="images/bouchon.jpg" alt="">
            <a href="fournisseurs.php">Fournisseurs</a>
            
        </article>
        
    </div>
    
</section>         

<section id="plus">
    
    <div id="plus-content">
        
        <article class="pastille">
            
            <a href="banquets.php">
                
                <p>Banquets</p>
                
            </a>
            
        </article>
           
        <article class="trip">
            
            <div id="tripadvisor">
        
                <div id="TA_rated396" class="TA_rated">
                <ul id="kZm8Mlh" class="TA_links Y54Pm6K">
                <li id="RqPz1eVtH" class="7Fu5BlE77k">
                <a target="_blank" href="https://www.tripadvisor.fr/"><img src="https://www.tripadvisor.fr/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a>
                </li>
                </ul>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=rated&amp;uniq=396&amp;locationId=2620131&amp;lang=fr&amp;display_version=2"></script>

            </div>
            
        </article>
        
        <article  class="pastille">
            
            <a href="cadeau.php">
            
                <p>Chèques<br>cadeaux</p>
                
            </a>
            
        </article>
        
    </div>
    
</section>
    

</div>

<?php
  
   include 'content/parties/footer.php';
                    
?>