<?php

    function envoi_mail($mailto, $text, $name){
        
        // $mailto : contient le mail (str) de la personne, en soit $_POST['mail']
        // $text : contenu du message
        // $name : nom de la personne
    
        $mail = 'info@lameunerie.be'; // Déclaration de l'adresse de destination.

        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }

        //=====Déclaration des messages au format texte et au format HTML.
        $message_txt = $text;//"Salut à tous, voici un e-mail envoyé par un script PHP.";
        $message_html = "<html><head></head><body>".$text."</body></html>";
        //==========

        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========

        //=====Définition du sujet.
        $sujet = "La Meunerie - Message de '".$name."'";
        //=========

        //=====Création du header de l'e-mail.
        $header = "From: \"".$name."\"<".$mailto.">".$passage_ligne;
        $header.= "Reply-to: \"".$name."\" <".$mailto.">".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        //==========

        //=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format texte.
        $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_txt.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary.$passage_ligne;
        //=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
        //==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        //==========

        //=====Envoi de l'e-mail.

        if(mail($mail,$sujet,$message,$header)){
            
            $txt = 'Votre message à bien été envoyé';

        }
        else{

            $txt = 'L\'envoi à échoué, réessayez plus tard';

        }
        
        //mail($mail,$sujet,$message,$header);

        return $txt;
        
        //==========
    
    }


?>