<?php

    include 'content/parties/header.php';
    include 'content/parties/nav.php';

?>


<?php

//    session_start();

    //var_dump($_SESSION['is_connect']);
    //var_dump($_SESSION['mail']);

    session_unset();

    session_destroy();

    echo 'Vous êtes déconnecté<br><br>';

    echo '<a href="index.php">Retour</a>';

    //var_dump($_SESSION['is_connect']);
    //var_dump($_SESSION['mail']);

    //header('Location: index.php');

?>
                    
                    
                    
<?php
  
   include 'content/parties/footer.php';
                    
?>