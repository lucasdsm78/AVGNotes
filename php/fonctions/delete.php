<?php
// $conn = new mysqli('localhost', 'root', '', 'rdn_eleves');
try{
   $bdd = new PDO('mysql:host=localhost;dbname=rdn_eleves','root','');
}
catch(PDOException $e){
   die('Erreur : '.$e->getMessage());
}
$idNote = $_POST['idMaxNote'] ;

$sql = "delete from note where idNote='$idNote' ";


if ($bdd->query($sql) === TRUE) {
    echo "data deleted";
}
else 
{
    echo "failed";
}

$con->close();
?>

