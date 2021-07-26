<?php
session_start();
date_default_timezone_set('Europe/Paris');
include "Vues/header.php" ; 
 if (!isset($_REQUEST['uc']))
 {
    include "vues/v_authentification.php" ;
}
else
 {
     if ($_REQUEST['uc']=='wrong') {
         session_destroy();
        header("Location:index.php");
    }
 	else {
 
        include "Modeles/connexion.php" ;
        include "Modeles/gestion_bdd.php" ;
        include "Controleurs/c_principal.php" ;
       	include "Footer/footer.php" ;
      
    }  
}
?>
