<?php
$page="form";
require_once '../utils/config.inc';
include '../template/header.php';
?>

<h3>Déclarer un formulaire</h3>

<form name ="formu1" action="#" method="get">

    <div class="form-group">
        <label for="intxt">Un champ texte Simple :</label>
        <input type="text" id="intxt" name="champ1" value="valeur par défaut" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="intxtA">Un champ texte à ligne multiple :</label>
        <textarea id="intxtA" name="champ2"  ROWS="5" COLS="50" class="form-control">contenu par défaut</textarea>

    </div>



    <!-- il ne faut pas confondre un champ hidden et un champ password -->
    <div class="form-group">
        <label for="pass">Un champ de type Mot de passe :  </label>
        <INPUT TYPE="password" id="pass" NAME="champPWD" SIZE="50" MAXLENGTH="8" />  

        <INPUT TYPE="hidden" NAME="champ_cache" VALUE="une valeur"/> 
    </div>
    <div class="form-group ">
        <INPUT TYPE="reset" VALUE="Effacer" class="btn btn-default" />
        <INPUT TYPE="submit" VALUE="Envoyer" name="validation" class="btn btn-default" />
        <INPUT TYPE="button" VALUE="Retour" onClick="
        <?php echo "window.location.replace('".$base_url."index.php');" ?>
        " class="btn btn-default"/>
    </div>
</form>

<?
//TRAITEMENT DU FORMULAIRE formu1 RECU EN GET dans la même page: 
// si le bouton submit a été envoyé c'est que l'on a cliqué dessus
if (isset($_GET["validation"]) && $_GET["validation"] = "Envoyer") {
    echo "<h3>Traitement du Forluaire GET</h3>";

    //toutes les infos envoyées en GET sont rangées dans la variable globale $_GET 
    //qui est un tableau associatif dont la clé est le nom du champ, 
    //et la valeur saisit la valeur de la case du tableau
    // si deux champs ont le même nom alors c'est la valeur du dernier champ qui sera envoyée
    // lors de l'envoi on peut constater que les valeurs des champs sont inscrites dans l'URL
    ?>

    <p>Vous avez envoyé les valeurs suivantes :<br> 
        champ 1 : <? echo $_GET["champ1"] ?><br>
        champ 2 : <? echo $_GET["champ2"] ?><br>
        champ masqué : <? echo $_GET["champPWD"] ?><br>
        champ caché : <? echo $_GET["champ_cache"] ?><br>

    </p>
    <?
}
?>

        <?php
        include '../template/footer.php';
        ?>