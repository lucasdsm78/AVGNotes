<?php
if (!isset($_REQUEST['action']))
	$action = "afficher" ;
else
	$action = $_REQUEST['action'] ;

switch ($action)
{
	case "afficher" : { 
           // $lesMatieres = getLesMatieres();
            $lesAnnees = getLesAnnees();
            $lesPeriodes = getLesPeriodes();
            // $idEleveNote = $_REQUEST['login'] ;
            require "Vues/v_afficher_periode_annee.php" ; 
            break ;             
        }
    case "afficherReleve" : { 
        
            $annee = $_REQUEST['annee'];
            $periode = $_REQUEST['periode'];
            // $idEleveNote = $_REQUEST['login'] ;
            $idEleveNote = getIdLogin($_SESSION['loginEleve']) ;
            $idNote = maxIdNote();
            $lesMatieres = getLesMatieres();
            require "Vues/v_calcul_moyenne.php" ; 
            break ;             
        }
    case "ajouter" : { 
            $annee = $_REQUEST['annee'];
            $periode = $_REQUEST['periode'];
            $idEleveNote = getIdLogin($_SESSION['loginEleve']) ;
            $idNote = maxIdNote();
            // $idEleveNote = $_REQUEST['login'] ;
            $lesMatieres = getLesMatieres();
            require "Vues/v_afficher_periode_annee_.php" ; 
            break ;        
        }

    case "validajout" : { 
        $liste_resultats = array();
        $liste_coefs = array();
        $liste_points = array();
        $idNote = maxIdNote();
        $resultatNote = $_POST['note'];
        $idEleveNote = getIdLogin($_SESSION['loginEleve']) ;
        $surCombien = $_POST['points'];
        $coefNote = $_POST['coef'];
        $annee = $_POST['annee'];
        $periode = $_POST['periode'];
        $idMatiereNote = $_POST['idMatiereNote'];
        $resultat = noteInsertion($idNote['idNote'], $resultatNote, $surCombien, $coefNote, $idEleveNote['idEleve'], $idMatiereNote, $periode, $annee);
        // $resultat = noteInsertion($idNote['idNote'], $resultatNote, $surCombien, $coefNote, 1, $idMatiereNote, $periode, $annee);
        $lesMatieres = getLesMatieres();
        $lesAnnees = getLesAnnees();
        $lesPeriodes = getLesPeriodes();
        // array_push($liste_resultats, $resultatNote);
        // array_push($liste_coefs, $coefNote);
        // array_push($liste_points, $surCombien);
        $derniereNoteCoef = getDerniereNoteCoef($idNote['idNote']);
        require "Vues/v_calcul_moyenne.php" ; 
        break ;        
        }

        case "calcul" : {
            $annee = $_REQUEST['annee'];
            $periode = $_REQUEST['periode'];
            // $idEleveNote = $_REQUEST['login'] ;
            $idEleveNote = getIdLogin($_SESSION['loginEleve']);
            $idNote = maxIdNote();
            $lesMatieres = getLesMatieres(); 
            $lesNotes = getLesNotes($idEleveNote['idEleve'], $periode, $annee);
            $sommeCoef = 0;
            $moyennePond = 0;
            foreach ($lesNotes as $laNote) 
            {
                $notesur20 = 0;
                if($laNote['SurCombien'] != 20)
                {
                    $notesur20 = ($laNote['resultatNote'] * 20) / $laNote['SurCombien'];
                    // echo $notesur20 . '<br>';

                }
                else
                {
                    $notesur20 = $laNote['resultatNote'] ;
                }
                $moyennePond = $moyennePond + ($notesur20 * $laNote['coefNote']) ;
                $sommeCoef = $sommeCoef + $laNote['coefNote'];

             }
              $moyenneGenerale = $moyennePond / $sommeCoef ;
                $moyenneGeneraleArrondi = round($moyenneGenerale, 2);
          require "Vues/v_calcul_moyenne.php" ; 
        break;            
    }
}
