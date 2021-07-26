<?php

// $conn = new mysqli('localhost', 'root', '', 'rdn_eleves');
try{
   $bdd = new PDO('mysql:host=localhost;dbname=rdn_eleves','root','');
}
catch(PDOException $e){
   die('Erreur : '.$e->getMessage());
}
$idNote = $_POST['idMaxNote'] ;
$resultatNote = $_POST['note'] ;
$surCombien = $_POST['points'] ;
$coefNote = $_POST['coef'] ;
$idEleveNote = $_POST['idEleve'] ;
$idMatiereNote = $_POST['idMatiereNote'] ;
$periode = $_POST['periode'] ;
$annee = $_POST['annee'] ;



$sql = "insert into note values('$idNote', '$resultatNote', '$surCombien', '$coefNote', '$idEleveNote' , '$idMatiereNote', '$periode', '$annee') ";


if ($bdd->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}

//$con->close();
?>





// function noteInsertion($idNote, $resultatNote, $surCombien, $coefNote, $idEleveNote, $idMatiereNote, $periode, $annee) {r
//     $sql = "insert into note values('$idNote', '$resultatNote', '$surCombien', '$coefNote', '$idEleveNote' , '$idMatiereNote', '$periode', '$annee') ";
//     $exec=$conn->prepare($sql) ;
//     $resultat = $exec->execute() ;
//     return $resultat;
//     // $conn->close();
// }
?>





<!--<?php
// $conn = new mysqli('localhost', 'root', '', 'rdn_eleves');
// $idNote = $_POST['idMaxNote'] ;
// $resultatNote = $_POST['note'] ;
// $surCombien = $_POST['points'] ;
// $coefNote = $_POST['coef'] ;
// $idEleveNote = $_POST['idEleve'] ;
// $idMatiereNote = $_POST['idMatiereNote'] ;
// $periode = $_POST['periode'] ;
// $annee = $_POST['annee'] ;

// $sql = "insert into note values('$idNote', '$resultatNote', '$surCombien', '$coefNote', '$idEleveNote' , '$idMatiereNote', '$periode', '$annee') ";


// if ($conn->query($sql) === TRUE) {
//     echo "data inserted";
// }
// else 
// {
//     echo "failed";
// }
?>