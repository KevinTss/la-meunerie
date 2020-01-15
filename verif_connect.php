<?php

include 'module/blindage_login.php';

$ID = blindage_login();

session_start();

$_SESSION['mail'] = $ID[0];
$_SESSION['pass'] = $ID[1];
$_SESSION['is_connect'] = true;

header('Location: index.php'); 

?>