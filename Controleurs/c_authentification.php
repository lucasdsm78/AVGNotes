<?php

if (isset($_REQUEST['action'])) 
{
    $action = $_REQUEST['action'];
    switch ($action)
    {
        case "verif" :    {   

            $login = $_REQUEST['login'];
            $mdp = md5($_REQUEST['mdp']);    

            $result= verifierIdentification($login, $mdp) ;
           
            if ($result)    
            {
                $_SESSION['loginEleve'] = $login ;
                 // $idEleveNote2 = $_SESSION ['loginEleve'] ;
                header ("Location:index.php?uc=default") ; 
                // require "Vues/v_default.php" ; 

            }
            else 
            {
                $_SESSION['error'] = "Identification incorrecte";
                header ("Location:index.php") ;
            }
            break ;

        }
    }
}
?>
