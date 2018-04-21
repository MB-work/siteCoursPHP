<?php
$page="poo";
require_once '../utils/config.inc';
include '../template/header.php';
include("../utils/fonctions.inc");

?>


                <h2>Programmation Orientée Objet</h2>

                <h3>Déclaration et utilisation d'Objets Pizza</h3>

                <?
                /*
                 * Pour utiliser un objet il faut inclure sa classe
                 * Cette classe permet de définir l'objet, pour plus d'informations, lire le fichier concerné
                 * Par convention les fichiers de classes sont organisés dans 
                 */
                include("../classes/pizza.class.php");

                $maPizza = new pizza("Regina", 12.9, 17, "tomate", array("Jambon", "champignon"));
                $taPizza = new pizza("Flamenkuch", 12.9, 17, "creme", array("oignon", "lardon"));
                $notrePizza = new pizza("Mixte", 14.5, 23, "Calzone", array("oignon", "jambon", "champignon", "oeuf"));

                echo paragrapher($maPizza->getLigneMenu());
                echo paragrapher($taPizza->getLigneMenu());
                echo paragrapher($notrePizza->getLigneMenu());
                ?>

                <?php
                afficherTitreJouer("Jouons avec les Objets : A vous de jouer !");
                $exo = "Modifier la classe Pizza pour lui faire prendre en attribut un tableau d'objet ingrédient. 
                Chacun de ses ingrédients doit comporter : un nom, un type (légume, fromage, viande, poisson...), 
                un conditionnement (frais, séché, sauce....) , une valeur énergétique, et une quantité. Puis recréer les Pizzas Regina, Flamenkuch et Mixte et afficher le menu.";
                afficherInstructions("compléter le code (tag : TODO_10)  pour " . $exo);
                echo "<ul class='jouer'>";
                //TODO_10 : Compléter le code dans les fichiers correspondants pour appeler votre fonction
                include ($correctionPath . "/TODO_10.php");
                echo "</ul>";
                ?>

<?php
include '../template/footer.php';
?>