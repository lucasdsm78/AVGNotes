<div class ="center">
    <div class ="title"> Ajouter des notes </div>
</div>

<form method="POST" action="index.php?uc=calculmoyenne&action=afficherReleve" class="trimestreannee">

        <table class="table">
        <select  class = "cb" name="periode">
            <option  class ="cb" value="0">-- Choisir une période --</option>
        <?php

            foreach ($lesPeriodes as $laPeriode) {
                echo '<option  class ="cb" value="' . $laPeriode['idPeriode'] . '">' 
                . $laPeriode['libellePeriode'] . '</option>';
            }
        ?>
        </select>

        <select class = "cb" name="annee">
            <option class ="cb" value="0">-- Choisir une année --</option>
        <?php
        foreach ($lesAnnees as $lAnnee) {
            echo '<option class ="cb" value="' . $lAnnee['annee'] . '">' 
            . $lAnnee['libelleAnnee'] . '</option>';
        }
        ?>
        </select>
    <input class ="button2" type="submit" name = "ValiderPeriodeAnnee" value="Valider">
    
</form>
