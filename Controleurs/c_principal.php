<?php

if (isset($_REQUEST['uc']))
{
	include "Controleurs/c_default.php" ;
	
	switch ($_REQUEST['uc'])
	{
		
		case 'auth' : {  include "Controleurs/c_authentification.php" ; break ;} 
		case 'deconnexion' : {  include "Modeles/deconnexion.php" ; break ;} 
		case 'calculmoyenne' : {  include "Controleurs/c_calculmoyenne.php" ; break ;} 
		case 'consult' : { include "Controleurs/c_consult.php" ; break ;}
		case 'suppr' : { include "Controleurs/c_supprimer.php" ; break ;}
	}
}
?>


