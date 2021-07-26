<div class="title"> Consultation du relevé de note </div>

<div class="trimestreannee">
    <select name="Trimestre">
<?php

?>

<div class ="center">
    <div class ="title"> Consultation du relevé de note </div>
</div>

<center>
<form action="index.php?uc=consult&action=afficher&submited=true" method="POST" class="trimestreannee">

    <select class ="cb" name="Trimestre">


    <?php                
            foreach ($DonneeTrimestre as $Trimestre) {

                echo '<option value="'.$Trimestre['idPeriode'].'">'.$Trimestre['libellePeriode'].'</option>';
                echo '<option class ="cb" value="'.$Trimestre['idPeriode'].'">'.$Trimestre['libellePeriode'].'</option>';

            }
    ?>
    </select>

    <select name="Annee">

    <?php                
        foreach ($DonneeAnnee as $Annee) {

            echo '<option value="'.$Annee['annee'].'">'.$Annee['libelleAnnee'].'</option>';
        }
    ?>
    </select>
</div>
<?php
'<div class="title">Recherche pour la date : </br>'.$_POST['calendrier'].'</div>';
        echo '<table>
                <tr>
                    <td>Matière</td>
                    <td>Coefficient</td>
                    <td>Moyenne</td>
                </tr>';
            foreach ($ConsulterDateSortie as $info) {
                echo '<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>';
            }
        echo '</table>';
        '<a href="index.php?uc=default&action=afficher"><div class="button">Retour</div></a>';
?>
    <select class ="cb" name="Annee">

    <?php       
        
        foreach ($DonneeAnnee as $Annee) {

            echo '<option class ="cb" value="'.$Annee['annee'].'">'.$Annee['libelleAnnee'].'</option>';
        }
    ?>
    </select>

    <input  class="button2" type="submit" value="Consulter">

</form>

<?php

if(isset($_REQUEST['submited'])){
    $idEleveNote = getIdLogin($_SESSION['loginEleve']);
    $lesNotesEleve = getLesNotes($idEleveNote['idEleve'], $_REQUEST['Trimestre'], $_REQUEST['Annee']);
    $moyenG = 0.0;

    echo "<table>
    <tr scope='row'>
        <th>Matière</th>
        <th>Notes</th>
        <th>Moyenne</th>
    </tr>";

        foreach($lesMatieres as $matiere){
            $moyen = 0.0;
            $coef = 0.0;
            $lesNotesMatiere = getNoteMatiereElevePeriodeAnnee($matiere['libelleMatiere'], $idEleveNote["idEleve"], $_POST['Trimestre'], $_POST['Annee']);
            echo '<tr>
                <td scope = "mat">'.$matiere['libelleMatiere'].'</td>';

            if(!empty($lesNotesMatiere)){
                echo '<td>';
                foreach($lesNotesMatiere as $note){
                    $notesur20 = ($note['resultatNote'] * 20) / $note['SurCombien'];
                    echo $note['resultatNote'].'<sub>/'.$note['SurCombien'].'</sub><sup>'.$note['coefNote'].'</sup>  ';
                  
                    $moyen = $moyen + $notesur20 *  floatval($note['coefNote']) ;
                   
                    $coef  = $coef + floatval($note['coefNote']);
                  
                }
                
                $moyen = $moyen / $coef;
                
                $moyen=  round($moyen, 2);
                echo '</td>';
            }
            else{
                echo '<td></td>';
            }
           
            $moyenG =  $moyenG  + $moyen ;
         
            echo "<td>{$moyen}</td>
            </tr>";
        }
     
        $moyenG = $moyenG / Count($lesMatieres);
        $moyenG=  round($moyenG, 2);
        echo"<tr><th scope='row'> Moyenne général :  </th> <td  colspan='2'> {$moyenG}</td> </tr>";

    echo "</table>

    </center>";
}
?>