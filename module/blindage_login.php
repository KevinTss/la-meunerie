<?php


/* ############################################################################################### *\
    
    MODULE DE VERIFICATION DU LOGIN
        
\* ############################################################################################### */

function blindage_login(){
    
    $host = 'lameunerhglameun.mysql.db';
$user = 'lameunerhglameun';
$bdd = 'lameunerhglameun';
$passwd = 'Meunerie2016';
    
    $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $passwd);
    
    $rep = $bdd->prepare('SELECT * FROM utilisateurs');
    
    $rep->execute(array());
    
    $mail = false;
    $pass = false;
    
    while($donnees = $rep->fetch()){
        
        if($_POST['mail'] == $donnees['mail']){
            
            $mail = $donnees['mail'];
            
            if(md5($_POST['pass']) == $donnees['mdp']){
                
                $pass = $donnees['mdp'];
                
            }
            
        }
        
    }
    
    $id = [];

    $id[] = $mail;
    $id[] = $pass;
    
    return $id;
    
}



























?>