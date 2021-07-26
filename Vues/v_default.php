
<form method="POST">
    <center><input type="submit" value="Rentrer les notes" formaction="index.php"></center>
    <center><input type="submit" value="Consulter les relevés de notes" formaction="index.php?uc=consult"></center>
    <center><input type="submit" value="deconnexion" formaction="index.php?uc=deconnexion"></center>
</form>

<form method ="post" >
    <div class="menu">
        <input class="btDefault" type="submit" value="Rentrer les notes" formaction="index.php?uc=calculmoyenne">
        <input  class="btDefault" type="submit" value="Consulter les relevés de notes" formaction="index.php?uc=consult">
        <input  class="btDefault" type="submit" value="Supprimer des notes" formaction="index.php?uc=suppr">
        <input  class="btDefault" type="submit" value="Deconnexion" formaction="index.php?uc=deconnexion">
    </div>
</form>