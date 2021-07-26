<?php
function getLesNotes($idEleve, $periode, $annee) {
    require "connexion.php" ;
    $sql = "select idNote, resultatNote, SurCombien, coefNote, idEleveNote, idMatiereNote, idPeriodeNote, anneeNote from note where idEleveNote = '$idEleve' and idPeriodeNote = '$periode' and anneeNote = '$annee'" ;
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function verifierIdentification($loginSaisi,$mdpSaisi) {
     require "connexion.php" ;
    
     $sql="select * from eleve";
     $exec=$bdd->query($sql);
     $trouve = false ;
     $fin=false ;
     while (!$trouve && !$fin)
     {
        if ($ligne = $exec->fetch())
        {
            
            if (strtoupper($ligne['loginEleve'])  ==strtoupper($loginSaisi) && $ligne['mdpEleve']==$mdpSaisi)
            {
                $trouve = true ;
            }
            
        }
        else
        {
            $fin = true ;
        }
    }
   
    return $trouve ;
}

Function getDonneeTrimestre() {
    require "connexion.php";
    $sql= "SELECT * FROM periode";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

function noteInsertion($idNote, $resultatNote, $surCombien, $coefNote, $idEleveNote, $idMatiereNote, $periode, $annee) {
    require "connexion.php";
    $sql = "insert into note values('$idNote', '$resultatNote', '$surCombien', '$coefNote', '$idEleveNote' , '$idMatiereNote', '$periode', '$annee') ";
    $exec=$bdd->prepare($sql) ;
    $resultat = $exec->execute() ;
    return $resultat;
}

function getLesMatieres() {
    require "connexion.php" ;
    $sql = "select * from matiere" ;
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function getLesAnnees() {
    require "connexion.php" ;
    $sql = "select * from annee" ;
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function getLesPeriodes() {
    require "connexion.php" ;
    $sql = "select libellePeriode, idPeriode, anneePeriode from periode group by libellePeriode" ;
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function maxIdNote() {
    require "connexion.php" ;
    $sql = "select max(idNote)+1 as idNote from note" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetch();
    return $ligne;
}

function getDerniereNoteCoef($id) {
    require "connexion.php" ;
    $sql = "select resultatNote, coefNote, surCombien from note where idNote = '$id'" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetch();
    return $ligne;
}

function getIdLogin($login) {
    require "connexion.php" ;
    $sql = "select idEleve from eleve where loginEleve = '$login'" ;
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetch();
    return $ligne;
}

Function getDonneeannee() {
    require "connexion.php";
    $sql= "SELECT * FROM annee";
    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;
}

Function getDistinctTrimestre(){
    require "connexion.php";
    $sql = "SELECT DISTINCT(libellePeriode) FROM periode";
    $exec=$bdd->prepare($sql);
    $exec->execute() ;
    $curseur=$exec->fetchAll();
    return $curseur;

function getNoteMatiereElevePeriodeAnnee($matiere, $idEleve, $periode, $annee){
    require "connexion.php" ;
    $sql = 'SELECT idNote, resultatNote, SurCombien, coefNote, idEleveNote, idMatiereNote, idPeriodeNote, anneeNote 
    FROM note 
    INNER JOIN matiere ON idMatiereNote = idMatiere
    WHERE idEleveNote = '.$idEleve.' 
    AND idPeriodeNote = '.$periode.'
    AND anneeNote = '.$annee.'
    AND libelleMatiere = "'.$matiere.'"';

    $exec=$bdd->prepare($sql) ;
    $exec->execute() ;
    $ligne=$exec->fetchAll();
    return $ligne;
}

function supprimerNote($idNote){
    require "connexion.php" ;
    $sql = "delete from note where idNote = {$idNote}";
    $exec=$bdd->prepare($sql) ;
    $exec->execute();

}

?>

