<?php


/* ############################################################################################### *\
    
    
        
\* ############################################################################################### */



function recup($table, $objet){
    
    $bdd = connectDB();
    
    $rep = $bdd->prepare('SELECT * FROM '.$table);
    
    $rep->execute(array());
    
    while($donnees = $rep->fetch()){
        
        $lien = $donnees[$objet];
        
    }
 
    return $lien;
    
}

function recup_lien($table, $item){
    
    $bdd = connectDB();
    
    $rep = $bdd->prepare('SELECT * FROM '.$table);
    
    $rep->execute(array());
    
    while($donnees = $rep->fetch()){
        
        $lien = $donnees[$item];
        
    }
 
    return $lien;
    
}

function recup_menu(){
    
    global $nom, $lien;
    
    $bdd = connectDB();
    
    $rep = $bdd->prepare('SELECT * FROM menus');
    
    $rep->execute(array());
    
    $nom = [];
    $lien = [];
    
    while($donnees = $rep->fetch()){
        
        $nom[] = $donnees['nom'];
        $lien[] = $donnees['lien'];
        
    }
    
    //return $nom, $lien;
    
}

function affiche_fournisseur(){
    
    $bdd = connectDB();
    
    $rep = $bdd->prepare('SELECT * FROM fournisseurs');
    
    $rep->execute(array());
    
    while($donnees = $rep->fetch()){
        
//        if( $_SESSION['is_connect']){
//            
//            echo '<form action="gestion_fournisseurs.php" method="post">';
//                
//        }
                 
        echo '<tr>'
            .'<td>';
             
//        if( $_SESSION['is_connect']){
//            
//            echo '<input type="hidden" name="ID" value="'.$donnees['ID_fournisseur'].'">'
//                .'<input type="hidden" name="title" value="'.$donnees['titre'].'">';
//                
//        }
        
        echo $donnees['titre']
            .'</td>'
            .'<td>'
            .$donnees['contact']
            .'</td>'
            .'<td>';
            
//        if ($_SESSION['is_connect']){
//            
//            echo $donnees['lien'];
//                
//        }
//        else{
            
            echo '<a href="'.$donnees['lien'].'" target="_blank">Site web</a>';
            
//        }
        
        echo '</td>';
            
//        if( $_SESSION['is_connect']){
//            
//            echo '<td>'
//                .'<input type="submit" name="supprimer" value="Supprimer">'
//                .'</td>';
//                
//        }
        
        echo '</tr>';
                
//        if( $_SESSION['is_connect']){
//            
//            echo '</form>';
//
//        }
//        
    }
    
}

function affiche_fournisseur_admin(){
    
        $bdd = connectDB();
    
    $rep = $bdd->prepare('SELECT * FROM fournisseurs');
    
    $rep->execute(array());
    
    while($donnees = $rep->fetch()){
        
        if( $_SESSION['is_connect']){
            
            echo '<form action="gestion_fournisseurs.php" method="post">';
                
        }
                 
        echo '<tr>'
            .'<td>';
             
        if( $_SESSION['is_connect']){
            
            echo '<input type="hidden" name="ID" value="'.$donnees['ID_fournisseur'].'">'
                .'<input type="hidden" name="title" value="'.$donnees['titre'].'">';
                
        }
        
        echo $donnees['titre']
            .'</td>'
            .'<td>'
            .$donnees['contact']
            .'</td>'
            .'<td>';
            
        if ($_SESSION['is_connect']){
            
            echo $donnees['lien'];
                
        }
        else{
            
            echo '<a href="'.$donnees['lien'].'" target="_blank">Site web</a>';
            
        }
        
        echo '</td>';
            
        if( $_SESSION['is_connect']){
            
            echo '<td>'
                .'<input type="submit" name="supprimer" value="Supprimer">'
                .'</td>';
                
        }
        
        echo '</tr>';
                
        if( $_SESSION['is_connect']){
            
            echo '</form>';

        }
        
    }
    
}

function ajout_four($titre, $contact, $lien){
    
    $bdd = connectDB();
    
    $rep = $bdd->prepare('INSERT INTO fournisseurs VALUES (NULL, ?, ?, ?)');
    
    $rep->execute(array($titre, $contact, $lien));
    
    
    
}

/* ############################################################################################### *\
    
    Section en provenance de la page "etes vous sur de vouloir supprimer..."
        
\* ############################################################################################### */

if( isset($_POST['sup']) ){
    
        $host = 'lameunerhglameun.mysql.db';
$user = 'lameunerhglameun';
$bdd = 'lameunerhglameun';
$passwd = 'Meunerie2016';

        
        $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $passwd);
    
//    $bdd = connectDB();
    
    $rep = $bdd->prepare('DELETE FROM fournisseurs WHERE ID_fournisseur = ?');
    
    $rep->execute(array($_POST['id']));
    
    header('Location: ../fournisseurs.php');
    
}
elseif( isset($_POST['no-sup']) ){
    
    header('Location: ../fournisseurs.php');
    
}







?>