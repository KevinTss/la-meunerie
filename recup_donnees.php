<?php


/* ############################################################################################### *\
    
    
        
\* ############################################################################################### */

function retour_gestion(){
    
    header('Location: /gestion.php');
    
}

function connect_bdd(){
    
    $host = 'localhost';
    $user = 'root';
    $bdd = 'lameunerie';
    $passwd = 'root';
    
    $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $passwd);
    
    return $bdd;
    
}

function recup($table, $objet){
    
    $bdd = connect_bdd();
    
    $rep = $bdd->prepare('SELECT * FROM '.$table);
    
    $rep->execute(array());
    
    while($donnees = $rep->fetch()){
        
        $lien = $donnees[$objet];
        
    }
 
    return $lien;
    
}

function recup_menu(){
    
    global $nom, $lien;
    
    $bdd = connect_bdd();
    
    $rep = $bdd->prepare('SELECT * FROM menus');
    
    $rep->execute(array());
    
    $nom = [];
    $lien = [];
    
    while($donnees = $rep->fetch()){
        
        $nom[] = $donnees['nom'];
        $lien[] = $donnees['lien'];
        
    }
    
}

function affiche_fournisseur(){
    
    $bdd = connect_bdd();
    
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
    
    $bdd = connect_bdd();
    
    $rep = $bdd->prepare('INSERT INTO fournisseurs VALUES (NULL, ?, ?, ?)');
    
    $rep->execute(array($titre, $contact, $lien));
    
    
    
}

/* ############################################################################################### *\
    
    Section en provenance de la page "etes vous sur de vouloir supprimer..."
        
\* ############################################################################################### */

if( isset($_POST['sup']) ){
    
    $bdd = connect_bdd();
    
    $rep = $bdd->prepare('DELETE FROM fournisseurs WHERE ID_fournisseur = ?');
    
    $rep->execute(array($_POST['id']));
    
    header('Location: ../fournisseurs.php');
    
}
elseif( isset($_POST['no-sup']) ){
    
    header('Location: ../fournisseurs.php');
    
}







?>