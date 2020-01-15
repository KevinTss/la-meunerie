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
            
            <div class="site-cache" id="site-cache"></div>
            
		</div>
		
		<script src="javascript/jquery-1.12.1.min.js"></script>
		
		<script type="text/javascript" src="javascript/click_menu-responsive.js"></script>
		<script type="text/javascript" src="javascript/change_menu_scroll.js"></script>
<!--		<script src="../javascript/s3Slider.js" type="text/javascript"></script>-->
		
	</body>
	
</html>


<?php

    //session_destroy();

?>

