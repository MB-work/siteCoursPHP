<?php
$page="poo";
require_once '../utils/config.inc';
include '../template/header.php';
?>

                <h4>Organisation des Fonctions</h4>
                <h5>Ordre</h5>

                <p class="com">  Il est possible d'utiliser une fonction avant de la définir. 
                    Il n'y a donc aucun problème pour définir des fonctions qui s'appellent entre elles</p>
                <?
                //utilisation de la fonction division 
                echo "9 divisé par 3 = " . division(9, 3);

                // définition de la fonction produit 
                function division($valeur1, $valeur2) {
                    return $valeur1 + $valeur2;
                }
                ?>
                <p class="com">  Une fonction est utilisable uniquement dans le script où elle est définie. 
                    Pour l'employer dans plusieurs scripts, il faut : 
                    - soit recopier sa définition dans les différents scripts (vous perdez l'intérêt de définir une fonction), 
                    soit la définir dans un fichier inclu partout où la fonction est nécessaire.</p>
                <?
                /*
                 * un bonne pratique consiste à ranger les fonctions
                 * dans un fichier à part de la page qui l'utilise
                 * en effet une fonction permet de factoriser 
                 * et de réutiliser en plusieurs endroits un fonctionnement
                 * il est donc préférable de la rendre accessible 
                 * au plus grand nombre de pages
                 */
                include("../utils/fonctions.inc");

                afficherTitreJouer("Jouons avec les Fonctions à paramètres variables : A vous de jouer !");
                $exo = "Ecrire puis appeler une fonction qui effectue le produit de tous les paramètres peu importe leur nombre";
                afficherInstructions("compléter le fichier de définition des fonctions puis le code (tag : TODO_9)  pour " . $exo);

                echo "<ul class='jouer'>";
                //TODO_8 : Compléter le code dans les fichiers correspondants pour appeler votre fonction
                /*
                 * à  l'aide de ces fonctions natives, lister dans fonctions utiles à tester!, 
                 * il est  très simple d'écrire une fonction qui accepte un nombre variable de paramètres. 
                 * Les principes sont les suivants : 
                 * - déclarer la fonction sans paramètre ;
                 * - récupérer, dans le corps de la fonction, les paramètres avec les fonctions correspondantes 
                 * - puis les utiliser (typiquement dans une boucle).
                 */
                include ($correctionPath . "/TODO_8.php");
                echo "</ul>";
                ?>


<?php
include '../template/footer.php';
?>