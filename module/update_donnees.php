<?php

/* ############################################################################################### *\
    
    MODULE DE MISE A JOUR DU CONTENU
        
\* ############################################################################################### */

function update($table, $champAModifier, $newData, $champReference, $valeurChampReference){  
    
    $bdd = connectDB();
    
    $requete = "UPDATE ".$table." SET ".$champAModifier." = '".$newData."' WHERE ".$champReference." = ".$valeurChampReference."";
    
    $rep = $bdd->prepare($requete);
    
    $rep->execute(array());
    
}

//function update_lien_hebdo($new_link){
//    
//    $bdd = connectDB();
//    
//    //$bdd = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $passwd);
//    
//    $requete = "UPDATE lameunerie.hebdos SET lien = '".$new_link."' WHERE hebdos.ID_hebdo = 1";
//    
//    $rep = $bdd->prepare($requete);
//    
//    $rep->execute(array());
//    
//}
//
function update_lien_menu($nom1,$nom2,$lien1,$lien2){
    
    $bdd = connectDB();
    
    $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $passwd);
    
    $rep = $bdd->prepare("UPDATE menus SET nom = ?, lien = ? WHERE ID_menus = 1");
    
    $rep->execute(array($nom1, $lien1));
    
    $rep = $bdd->prepare("UPDATE menus SET nom = ?, lien = ? WHERE ID_menus = 2");
    
    $rep->execute(array($nom2, $lien2));
    
}
//
//function update_lien_expos($new_link){
//    
//    $bdd = connect_bdd();
//    
//    $rep = $bdd->prepare("UPDATE lameunerie.expos SET lien = ? WHERE ID_expo = 1");
//    
//    $rep->execute(array($new_link));
//    
//}
//
//function update_lien_forfait($new_link){
//    
//    $bdd = connect_bdd();
//    
//    $rep = $bdd->prepare("UPDATE lameunerie.forfaits SET lien = ? WHERE ID_forfait = 1");
//    
//    $rep->execute(array($new_link));
//    
//}
//
//function update_lien_cheque($new_link){
//    
//    $bdd = connect_bdd();
//    
//    $rep = $bdd->prepare("UPDATE lameunerie.cheque SET lien = ? WHERE ID_cheque = 1");
//    
//    $rep->execute(array($new_link));
//    
//}


























?>