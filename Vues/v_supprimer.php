<div class ="center">
    <div class ="title">Suppresion d'une note</div>
</div>

<center>
<form action="index.php?uc=suppr&action=afficher&submited=true" method="POST" class="trimestreannee">

    <select class="cb" name="Matiere">

    <?php       
        
        foreach ($lesMatieres as $matiere) {

            echo '<option  class="cb" value="'.$matiere['libelleMatiere'].'">'.$matiere['libelleMatiere'].'</option>';
        }
    ?>
    </select>

    <select  class="cb" name="Trimestre">

    <?php                
            foreach ($DonneeTrimestre as $Trimestre) {

                echo '<option  class="cb" value="'.$Trimestre['idPeriode'].'">'.$Trimestre['libellePeriode'].'</option>';
            }
    ?>
    </select>

    <select  class="cb" name="Annee">

    <?php       
        
        foreach ($DonneeAnnee as $Annee) {

            echo '<option  class="cb" value="'.$Annee['annee'].'">'.$Annee['libelleAnnee'].'</option>';
        }
    ?>
    </select>

    <input class="button2" type="submit" value="Consulter">

</form>

<?php

if(isset($_REQUEST['submited'])){

    echo '<form action="index.php?uc=suppr&action=afficher&sup=true" method="POST" class="trimestreannee">';

    $idEleveNote = getIdLogin($_SESSION['loginEleve']);
    $lesNotesMatiere = getNoteMatiereElevePeriodeAnnee($_POST['Matiere'], $idEleveNote["idEleve"], $_POST['Trimestre'], $_POST['Annee']);
    if(!empty($lesNotesMatiere)){
        echo "<table>
        <tr scope='row'>
            <th>Notes</th>
            <th></th>
        </tr>";
        
        foreach($lesNotesMatiere as $note){
            echo '<td><input type="hidden" name="id" value="'.$note["idNote"].'">';
            echo $note['resultatNote'].'<sub>/'.$note['SurCombien'].'</sub><sup>'.$note['coefNote'].'</sup>  ';
            echo '</td>';
            echo '<td><input type="submit" class ="buttonDaSivla" value="Supprimer"></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    else{
        echo '<span style="color: red">Il n&#146;y a pas de note pour cette matière</span>';
    }

    echo '</form>';
}

if(isset($_REQUEST['sup'])){
    supprimerNote($_POST['id']);
    echo '<span style="color: green">La note a été supprimée</span>';
}

?>

</center>