<?php

    include 'include.php';

    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

    session_start();

//    include 'module/update_donnees.php';
//    include 'module/mail_contact.php';
//    include 'module/mail_resa.php';

?>



<!DOCTYPE html>
<html lang="fr-FR">
    
    <script>
        
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79386740-1', 'auto');
      ga('send', 'pageview');

    </script>

	<head>

		<title>La Meunerie</title>
		
		<!-- ###############################   >
		                  META
		<    ############################### -->
		
		<meta charset="utf-8" />
		<!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" /> <!-- Empêche l'utilisateur de zoomer -->
		
		<!-- ###############################   >
		                  LINK
		<    ############################### -->
		
<!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/calendrier.css" />
		
		
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic' rel='stylesheet' type='text/css'>
		
<!--		<link rel="stylesheet" href="css/css-news.css" type="text/css" media="screen">-->
		
		<link rel="stylesheet" href="css/style-medium.css" type="text/css" media="screen and (max-width: 960px)"   />
		<link rel="stylesheet" href="css/style-small.css" type="text/css" media="screen and (max-width: 660px)"   />
		
		
		
		<link rel="icon" type="image/png" href="images/favi2.png" />
		
		
		
		<!-- ###############################   >
		                  SCRIPT
		<    ############################### -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		
<!--		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<!--		<script type="text/javascript" src="javascript/calendar.js"></script>-->
       
<!--       <script type="text/javascript" src="javascript/calendrier.js"></script>-->
       
       <!-- Script pour gallerie photo -->
       
<!--        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="module/Zoombox/zoombox.js"></script>
        
        <link href="module/Zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
        
        <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 600,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
        </script>
		
		<!--[if lt IE 9]>
		    <srcipt src="http://html5shim.googlecode.com/svn/trunk/html5.js"></srcipt>
		<![endif]-->
		
	</head>
	
	<body>
	    
	    <div class="wrapper">
   
            <div class="container">