<div class="home">
    <!-- <?php 
   // echo '<div id="Home_title">Calcul de la moyenne générale de ' . $_SESSION['login'] . ' </div>'
    ?><!-->

    <table class="table">

<center>
    <label for="periode">Période:</label>
    <select class ="cb" name="periode">

    <?php

    echo  '<option class ="cb" value="0">' . $periode . '</option>' ;
    ?>

    </select>
    <br>

    <label for="annee">Année:</label>
    <select class ="cb" name="annee">

    <?php

    echo  '<option class ="cb" value="0">' . $annee . '</option>' ;
    ?>

    </select>
</center>
    <br><br>
            <table class="test" id="mytab">
            <?php


            foreach($lesMatieres as $laMatiere)
            {

                // // if (isset($_REQUEST['action']) && ($_REQUEST['action'] == 'ajouter') 
                // // && isset($_REQUEST['id']) && ($_REQUEST['id'] == $laMatiere['idMatiere'] ))
                // // {
                // //     echo '<tr>'
                // //    .  '<form method="POST" action="index.php?uc=calculmoyenne&action=validajout">'
                // //     . '<input type="hidden" name="id" value="' . $_REQUEST['id'] . '">'
                // //     . '<input type="hidden" name="periode" value="' . $periode . '">'
                // //     . '<input type="hidden" name="annee" value="' . $annee . '">'
                // //     // . '<input type="hidden" name="login" value="' . $idEleveNote . '">'
                // //     . '<td>' . $laMatiere['libelleMatiere'] . '</td>'
                // //     . '<td><input type="text" size="1" style="width:20px" name="note" placeholder="note">    /   <input type="text" size="1" style="width:21px" name="points" placeholder="pts"><sup><input type="text" size="1" style="width:20px" name="coef" placeholder="coef"></sup></td>'
                // //     . '<td><input type="submit" name = "Valider" value="Valider"></td>'
                // //     // . '<button id="btn1">Append text</button>'
                // //     . '</tr>'
                // //     . '</form>' ;

                // }
                // else
                // {
                    echo '<tr class="' . $laMatiere['idMatiere'] . '"><td>' . $laMatiere['libelleMatiere'] . '</td>' 
                    // A REMETTRE
                     // . '<form id="frmajout" method="post">'
                    // . '<form id="formajout">'
                    . '<td><input type="hidden" id="idMatiere" name="idMatiere" value="' . $laMatiere['idMatiere'] . '">'
                    // . '<input type="hidden" class="idMatiere" id="' . $laMatiere['idMatiere'] . '" name="idMatiere" value="' . $laMatiere['idMatiere'] . '">'
                    . '<input type="hidden" id="annee" name="annee" value="' . $annee . '">'
                    . '<input type="hidden" id="periode" name="periode" value="' . $periode . '">'


                    // METTRE INPUT TYPE SUBMIT


                    . '<input type="hidden" id="idEleve" name="idEleve" value="' . $idEleveNote['idEleve'] . '">'
                    . '<input type="hidden" id="idNote" name="idNote" value="' . $idNote['idNote'] . '">'
                    // . '<input type="hidden" name="login" value="' . $idEleveNote . '">'
                    // . '<td><input type="submit" name ="Ajouter" value="Ajouter"></td></tr>' 



                    . '<button  id="' . $laMatiere['idMatiere'] . '" name="submit" class="submit buttonDaSivla">Ajouter</button>'

                     // . '</form>'
                    . '</td>' 
                    . '</tr>' ;
                // }
              /*  if (isset($_REQUEST['action']) && ($_REQUEST['action'] == 'validajout') 
                && isset($_REQUEST['id']) && ($_REQUEST['id'] == $laMatiere['idMatiere'] ))                    
                {
                            /*echo    
                            '<td><input type="hidden" name="id" value="' . $_REQUEST['idNote'] . '">'
                        . '<input type="text" name="resultatNote" value="' . $laNote['resultatNote'] . '"></td>' ;*/
                           /* echo '<tr>'
                       .  '<form method="POST" action="index.php?uc=calculmoyenne&action=validajout">'
                        . '<input type="hidden" name="id" value="' . $_REQUEST['id'] . '">'
                        . '<input type="hidden" name="periode" value="' . $periode . '">'
                    . '<input type="hidden" name="annee" value="' . $annee . '">'
                        . '<td>' . $laMatiere['libelleMatiere'] . '</td>'
                        . '<td>' . $derniereNoteCoef['resultatNote'] .  '/' . $derniereNoteCoef['surCombien'] . '<sup>' . $derniereNoteCoef['coefNote'] . '</sup></td>'                        
                        . '<td><input type="text" size="1" name="note" placeholder="note"><sup><input type="text" size="1" name="coef" placeholder="coef"></sup></td>'
                        . '<td><input type="submit" name ="Ajouter" value="Ajouter"></td>'
                        . '</tr>'
                        . '</form>' ;
                    echo '<tr>'
                   .  '<form method="POST" action="index.php?uc=calculmoyenne&action=validajout">'
                    . '<input type="hidden" name="id" value="' . $_REQUEST['id'] . '">'
                    . '<input type="hidden" name="periode" value="' . $periode . '">'
                    . '<input type="hidden" name="annee" value="' . $annee . '">'
                    // . '<input type="hidden" name="login" value="' . $idEleveNote . '">'
                    . '<td>' . $laMatiere['libelleMatiere'] . '</td>'
                    . '<td>' . $derniereNoteCoef['resultatNote'] .  '/' . $derniereNoteCoef['surCombien'] . '<sup>' . $derniereNoteCoef['coefNote'] . '</sup></td>'
                    . '<td><input type="text" size="1" style="width:20px" name="note" placeholder="note">    /   <input type="text" size="1" style="width:21px" name="points" placeholder="pts"><sup><input type="text" size="1" style="width:20px" name="coef" placeholder="coef"></sup></td>'
                    . '<td><input type="submit" name = "Valider" value="Valider"></td>'
                    . '</tr>'
                    . '</form>' ;


                    }*/
    // echo '<button id="' . $laMatiere['idMatiere'] . '" name="valider" class="valider">Valider</button>';
            }
    
    echo '</table>' ;
    echo '<br><br>' ;
    echo '<center>' ;
   echo '<form method="POST" action="index.php?uc=calculmoyenne&action=calcul">'
        . '<input type="hidden" id="annee" name="annee" value="' . $annee . '">'
        . '<input type="hidden" id="periode" name="periode" value="' . $periode . '">'
        . '<input type="hidden" id="idEleve" name="idEleve" value="' . $idEleveNote['idEleve'] . '">'
        . '<input type="hidden" id="idNote" name="idNote" value="' . $idNote['idNote'] . '">'
        . '<input  class ="button2" type="submit" name = "Calculer" value="Valider">'
        . '</form>';

    echo '</center>' ;
    echo '<br><br>';
    if (isset($_REQUEST['action']) && ($_REQUEST['action'] == 'calcul'))
    {
        //echo "<center><font color='red'> Votre moyenne générale est de " . $moyenneGeneraleArrondi . '</font></center>';
        echo "<center><font color='green'>Voos notes ont été ajoutées. </font></center>";
    }

    ?>
<!--     <button id="note" name="valider" class="valider">Valider</button>
 -->    <!-- <input type="submit" name ="Calculer" value="Calculer" href="index.php?uc=calculmoyenne&action=calcul"> -->
<!-- <button type="submit" formaction="index.php?uc=calculmoyenne&action=calcul">Calculer la moyenne</button>'
 -->
</div>