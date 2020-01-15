<?php

    function connectDB(){
        
        $host = 'lameunerhglameun.mysql.db';
$user = 'lameunerhglameun';
$bdd = 'lameunerhglameun';
$passwd = 'Meunerie2016';
        
        $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $passwd);

        return $bdd;
        
    }

    include 'module/recup_donnees.php';
    include 'module/update_donnees.php';
    include 'module/mail_contact.php';
    //include 'module/mail_resa.php';


?>