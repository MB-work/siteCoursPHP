<?php
$page="exemple";
require_once '../utils/config.inc';
include '../template/header.php';
?>

<h3>Formulaire et page de traitement</h3>
<form name="formu3" method="POST" action="<?=$base_url;?>lessons/exemple_action.php">   
    <fieldset>
        <LEGEND align=top> Insérer un nouvel Ingrédient </LEGEND> 
        <div>     

            <?
            // connexion au serveur de base de données à l'aide des constantes définies précédemment
            $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS);
            // selection de la base de données à l'aide des constantes définies précédemment
            mysqli_select_db($link ,DB_BDD);
            //écriture de notre requête
            $sql = "SELECT * FROM  pyramide_alimentaire  ";
            //envoie de la requête et récupération du résultat
            $lesCategories = mysqli_query($link , $sql) or die('Erreur SQL ! <br/>' . $sql . '<br/>' . mysql_error());
            ?>

            <div class="form-group">
                <label >Catégorie : </label>
                <SELECT NAME="categorie" id="categorie"  class="form-control">
                    <?
                    while ($categorie = mysqli_fetch_assoc($lesCategories)) {

                                                // fonction qui permet de récupérer dans des variables individuelles chacune des associations clé/valeur du tableau
                        extract($categorie);
                        echo "<OPTION VALUE='$identifiant'>$libelle</OPTION>";
                    }
                    ?>
                </SELECT> 
            </div>

            <div class="form-group">
                <label for="libelle">Libelle : </label>
                <input type="text" id="libelle" name="libelle" value=""  class="form-control"/>
            </div>


            <div class="form-group">
                <label for="conditionnement">Conditionnement : </label>
                <label for="conditionnement1"  class="checkbox-inline" >
                    <INPUT TYPE="radio" id="conditionnement1" NAME="conditionnement" VALUE="frais" CHECKED />
                    Frais
                </label>
                <label for="conditionnement1"  class="checkbox-inline" >
                    <INPUT TYPE="radio" id="conditionnement2" NAME="conditionnement" VALUE="sec" />
                    Sec
                </label>
                <label for="conditionnement1"  class="checkbox-inline" >
                    <INPUT TYPE="radio" id="conditionnement3" NAME="conditionnement" VALUE="conserve" />
                    en Conserve
                </label>
                <label for="conditionnement1"  class="checkbox-inline" >
                    <INPUT TYPE="radio" id="conditionnement4" NAME="conditionnement" VALUE="surgele" />
                    Surgelé
                </label>

            </div>


            <div class="form-group">
                <INPUT TYPE="submit" VALUE="Envoyer" name="validation" class="btn btn-default form-control" />
            </div>
        </form>


        <?php
        include '../template/footer.php';
        ?>