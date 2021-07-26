<?php


if (!isset($_REQUEST['action'])) {
    $action = "afficher";
}
else {
    $action = $_REQUEST['action'];
}


switch ($action) {
    case 'afficher': {
        $DonneeAnnee = getDonneeAnnee();
        $DonneeTrimestre = getLesPeriodes();
        $lesMatieres = getLesMatieres();
        require "Vues/v_supprimer.php";
        break;
    }
}



?>