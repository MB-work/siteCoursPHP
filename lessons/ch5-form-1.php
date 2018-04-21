<?php
$page="form";
require_once '../utils/config.inc';
include '../template/header.php';
?>

<h3>Envoyer des données par formulaire en POST</h3>

<form name="formu2" method="POST" action="#">
    <fieldset>
        <LEGEND align=top> Formulaire DEUX </LEGEND> 
        <div  class="form-group">     
            un champ à choix multiple permettant la selection d'une seule valeur : <br/>
           
                <INPUT TYPE="radio" id="champ3val1" NAME="champ3" VALUE="val1" CHECKED/>Choix 1
        
            <label for="champ3val2"  class="radio-inline">
                <INPUT TYPE="radio" id="champ3val2" NAME="champ3" VALUE="val2"/>Choix 2
            </label>
            <label for="champ3val3"  class="radio-inline">
                <INPUT TYPE="radio" id="champ3val3" NAME="champ3" VALUE="val3"/>Choix 3
            </label> 

        </div> 
        <div  class="form-group"> 
            un champ à choix multiple permettant la selection de plusieurs valeurs : <BR/>
            <label for="champ4val1"  class="checkbox-inline" ><INPUT TYPE="checkbox" id="champ4val1" NAME="champ4[]" VALUE="val1" />Choix 1</label>
            <label for="champ4val2"  class="checkbox-inline"><INPUT TYPE="checkbox" id="champ4val2" NAME="champ4[]"  VALUE="val2" CHECKED/>Choix 2</label>
            <label for="champ4val3"  class="checkbox-inline"><INPUT TYPE="checkbox" id="champ4val3" NAME="champ4[]"  VALUE="val3"/>Choix 3</label>
            <label for="champ4val4"  class="checkbox-inline"><INPUT TYPE="checkbox" id="champ4val4" NAME="champ4[]"  VALUE="val4" CHECKED/>Choix 4</label>
            <label for="champ4val5"  class="checkbox-inline"><INPUT TYPE="checkbox" id="champ4val5" NAME="champ4[]"  VALUE="val5"/>Choix 5</label>
        </div>

        <div  class="form-group">
            <label for="champ5A">Liste de choix</label>
            <SELECT NAME="champ5A" id="champ5A" class="form-control">
                <OPTION VALUE="val1" SELECTED>Choix 1</OPTION>
                <OPTION VALUE="val2">Choix 2</OPTION>
                <OPTION VALUE="val3">Choix 3</OPTION>
            </SELECT> 
        </div>
        <div  class="form-group">
            <label for="champ5B">Liste de choix à fenêtre large</label>
            <SELECT NAME="champ5B" id="champ5B" SIZE="3" class="form-control">
                <OPTION VALUE="val1">Choix 1</OPTION>
                <OPTION VALUE="val2" SELECTED>Choix 2</OPTION>
                <OPTION VALUE="val3" >Choix 3</OPTION>
            </SELECT> 
        </div>
        <div  class="form-group">
            <label for="champ5C">Liste de choix multiples</label>
            <SELECT NAME="champ5C[]" id="champ5C" SIZE="3" MULTIPLE class="form-control">
                <OPTION VALUE="val1" SELECTED>Choix 1</OPTION>
                <OPTION VALUE="val2">Choix 2</OPTION>
                <OPTION VALUE="val3" SELECTED>Choix 3</OPTION>
            </SELECT> 
        </div>
        <div  class="form-group">
            <INPUT TYPE="submit" VALUE="Envoyer" name="validation" class="btn btn-default  form-control" />
        </div>
    </fieldset>
</form>

<?
//TRAITEMENT DU FORMULAIRE formu2 RECU EN POST dans la même page: 
// si le bouton submit a été envoyé c'est que l'on a cliqué dessus
if (isset($_POST["validation"]) && $_POST["validation"] = "Envoyer") {
    echo "<h3>Traitement du Formulaire POST</h3>";

    //toutes les infos envoyées en POST sont rangées dans la variable globale $_POST 
    //qui est un tableau associatif dont la clé est le nom du champ, 
    //et la valeur saisit la valeur de la case du tableau
    // si deux champs ont le même nom alors c'est la valeur du dernier champ qui sera envoyé
    // La différence avec GET est que les valeurs du formulaire ne passent pas par l'URL ce qui est plus sécurisé
    ?>
    <p>Vous avez envoyé les valeurs suivantes :<br/> 
        champ 3 : <? echo $_POST["champ3"] ?><br/>
        champ 4 : <? echo implode($_POST["champ4"], ","); ?><br/>
        champ 5A : <? echo $_POST["champ5A"] ?><br/>
        champ 5B : <? echo $_POST["champ5B"] ?><br/>
        champ 5C : 
        <?
        foreach ($_POST["champ5C"] as $val) {
            echo $val . " ";
        }
        ?>

    </p>
    <?
}
?>
        <?php
        include '../template/footer.php';
        ?>