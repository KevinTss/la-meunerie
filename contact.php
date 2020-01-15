
<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>
                
<div class="content">
    
    <section id="contact">
        
        <div class="acces">
            
            <h1>Accès</h1>
            
            <p>
               
                Rue du Patronage, 1A<br>
                1476 Houtain-le-Val<br>
                <br>
                067/77.28.16<br>
                
            </p>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2533.415097864873!2d4.409272715660479!3d50.58223758574131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c22d2690ec2c37%3A0xa58787abb6ff8fca!2sRue+du+Patronage+1%2C+1476+Genappe!5e0!3m2!1sfr!2sbe!4v1458651110159" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            
        </div>
        
        <hr>
        
        
        <form id="contact" action="" method="post"><!-- onsubmit="return verifForm(this)">-->
                                       
                                       
           <?php

//                if(isset($_POST["nom"]) and ($_POST["mail"]) and ($_POST["message"])){
//
//                    echo '<inputtype="text" name="nom" placeholder="Votre nom" onblur="verifPseudo(this)"><br>';
//                    echo '<input class="ok" type="mail" name="mail" placeholder="Votre E-mail" onblur="verifMail(this)"><br>';
//                    echo '<textarea class="ok" name="message" id="" placeholder="Votre message" onblur="verifMessage(this)"></textarea><br>';
//
//                    //envoi_mail($_POST["mail"], $_POST["message"], $_POST["nom"]);
//
//                }
//                else{
//
//                    echo '<input type="text" name="nom" placeholder="Votre nom" onblur="verifPseudo(this)"><br>';
//                    echo '<input type="mail" name="mail" placeholder="Votre E-mail" onblur="verifMail(this)"><br>';
//                    echo '<textarea name="message" id="" placeholder="Votre message" onblur="verifMessage(this)"></textarea><br>';
//
//                }

           ?>
           
           <fieldset>
               
               <label for="nom">Nom & Prénom : </label>
               <input type="text" name="nom">
               <br><br>
               <label for="mail">E-mail : </label>
               <input type="mail" name="mail">
               <br><br>
               <textarea name="message" placeholder="Votre message ici"></textarea>
               
           </fieldset>

           <input type="submit" value="Soumettre">

       </form>
        
    </section>

</div>

</div>

            </div>
            
            <div class="site-cache" id="site-cache"></div>
            
		</div>
		
		<script src="javascript/jquery-1.12.1.min.js"></script>
		
		<script type="text/javascript" src="javascript/click_menu-responsive.js"></script>
		<script type="text/javascript" src="javascript/change_menu_scroll.js"></script>
<!--		<script src="../javascript/s3Slider.js" type="text/javascript"></script>-->
		
	</body>
	
</html>


<?php
  
   //include 'content/parties/footer.php';
                    
?>