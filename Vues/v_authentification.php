<!DOCTYPE html><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Repas BTS</title>
<html lang="fr">
<head>

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/jquery-ui.min.css" rel="stylesheet">
    <link href="includes/css/animate.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
    <link href="includes/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <div class="loader"></div>
    <div class="bgloader"></div>
    <div id="background"></div>
    <center><img src="images/logo.png" id="image"></center>
    <form method="post" action="index.php?uc=auth&action=verif">
        <?php
            if (isset($_SESSION['error'])) echo '<div class="homePhone"><center>'.$_SESSION['error'].'</center></div>' ;
        ?> 
        <center><h3 class ="label">login :</h3><input type="text" class="textId" size="32" name="login" required></center>
        <center><h3 class ="label">mot de passe :</h3><input type="password"  class="textId" size="32"  name="mdp" required></center>
        <center><button class="bt" type="submit">Valider</button></center>
    </form>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="includes/js/connexionstyle.js"></script>
</html>