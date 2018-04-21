<?php
$page="poo";
require_once '../utils/config.inc';
include '../template/header.php';
include("../utils/fonctions.inc");
?>

                <h3>La récursivité</h3>

                <p class="com">
                    à  l'instar de nombreux langages, PHP autorise la récursivité, c'est-à-dire la possibilité pour une fonction de s'appeler elle-même.
                </p>

                <?php
                afficherTitreJouer("Jouons avec les Fonctions récursives : A vous de jouer !");
                $exo = "Coder la fonction 'afficher_tableau(\$tableau,\$titre='',\$niveau=0)' qui permet d'afficher le contenu d'un tableau, 
                    éventuellement multidimensionnel (d'où la récursivité à mettre en place)";
                afficherInstructions("compléter le code (tag : TODO_9)  pour " . $exo);
                echo "<ul class='jouer'>";
                //TODO_9 : Compléter le code dans les fichiers correspondants pour appeler votre fonction
                include ($correctionPath . "/TODO_9.php");
                if (function_exists("afficher_tableau")) {
                    // Afficher un tableau de couleurs
                    $couleurs = array("Bleu", "Blanc", "Rouge");
                    afficher_tableau($couleurs, "Couleurs");
                    // Afficher un tableau de pays
                    $pays = array("FR" => "France", "IT" => "Italie");
                    afficher_tableau($pays, "Pays");
                    // Afficher un tableau à deux dimensions (couleurs et pays) 
                    $cp = array("couleurs" => $couleurs, "pays" => $pays);
                    afficher_tableau($cp, "Couleurs & Pays");
                }
                echo "</ul>";
                ?>



<?php
include '../template/footer.php';
?>