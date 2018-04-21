<?php
$page="array";
require_once '../utils/config.inc';
include '../template/header.php';
?>


                <? /**
                 * En PHP, un tableau est une collection (liste d'éléments) ordonnée de couples clé/valeur.
                    La clé peut être de type entier ou de type chaîne. Dans le premier cas, le tableau est dit numérique et la clé est désignée par le terme indice. Dans le deuxième cas, le tableau est dit associatif : les clés ne sont pas forcément consécutives, ni ordonnées, et ce tableau peut présenter des clés entières et des clés de type chaîne.
                    La valeur associée à la clé peut être de n'importe quel type, et notamment de type tableau ; dans ce cas, le tableau est dit multidimensionnel.
                    Création
                    Une variable de type tableau peut être définie explicitement grâce à la fonction array ou implicitement en utilisant une notation à crochets ([ ]).
                    Notation à crochets ([ ])
                    Une variable utilisée pour la première fois avec une notation de la forme $variable[...], est automatiquement créée avec le type tableau.
                    La même opération effectuée sur une variable déjà définie, avec un type scalaire, provoque un message d'erreur.
                    Le contenu d'un tableau peut être ainsi défini par plusieurs affectations du type $tableau[...] = valeur.
                    Avec une affectation du type $tableau[] = valeur, PHP recherche le plus grand indice entier utilisé et associe la valeur à l'indice immédiatement supérieur. Si le tableau est vide, l'élément est placé à l'indice 0.
                    Avec une affectation du type $tableau[clé] = valeur, PHP associe la valeur à la clé indiquée (qui peut être de type entier ou de type chaîne).
                    Les deux notations peuvent être mélangées dans une séquence d'affectation. La fonction array
                    La fonction array permet de créer un tableau à partir d'une liste d'éléments. Syntaxe
                    tableau array([mixte valeur[, ...]])
                    ou
                    tableau array([{chaîne | entier} clé => mixte valeur[, ...]])
                    valeur Élément du tableau. clé Valeur de la clé.
                 */?>
                
                
                <?php
                // Déclaration d'un tableau vide
                $clients = array();

                // Déclaration d'un tableau indexé numériquement
                $ingredient = array('champignons', 'oignons', 'Jambon', 'mozzarella');

                // Déclaration d'un tableau associatif
                $pizza = array(
                    'nom' => 'Regina',
                    'base' => 'sauce tomates',
                    'prix' => 12.90,
                    'estCalzone' => false
                );

                // Ajout d'un ingrédient au tableau indexé numériquement
                $ingredient[] = 'oeuf';

                // Ajout de la taille de la pizza dans le tableau associatif
                $pizza['taille'] = 24;

                // Ajout de $ingredient au tableau
                $ingredient[12] = 'poivron'; //agrandit dynamiquement le tableau $ingredient et ajoute la valeur 'poivron' à l'index 12.
                $ingredient[20] = 'lardons'; //agrandit encore dynamiquement le tableau $ingredient et ajoute la valeur 'lardon' à l'index 20.
                 
                ?>

                <h3>Affichage du contenu d'un tableau (lc 56)</h3>
                <?php
                echo '<pre>';
                print_r($pizza);
                echo '</pre>';

                ?>     

                <h4>Lecture d'une valeur dans un tableau à clés numériques  (lc 63)</h4>
                <?php
                // Affichage du Jambon
                echo $ingredient[2];

                ?>
                
                <h4> Lecture de valeurs dans un tableau associatif (lc 71)</h4>
                <?php
                // Affichage des valeurs du tableau associatif
                echo 'Nom : ', $pizza['nom'], '<br/>';
                echo 'Base : ', $pizza['base'], '<br/>';
                echo 'Prix : ', $pizza['prix'], ' euros<br/>';
                echo 'Taille : ', $pizza['taille'], ' cm';
                ?>


                <h3>Parcours d'un tableau (lc 81)</h3>

                <h4> Parcours de tableaux avec foreach() (lc 83)</h4>
                
                <h5>Les Ingredients</h5>
                <?php
                // Affichage des valeurs d'un tableau
                 echo "<table border=1 class='table'>";
                foreach ($ingredient as $valeur) {

                    echo "<tr><td>".$valeur. '</td></tr>';
                }
                echo "</table>";
                ?>
                
                <h5>Une Pizza</h5>
                <?php
                // Affichage des couples clé / valeur
                echo "<table border=1 class='table'>";
                foreach ($pizza as $cle => $valeur) {

                    echo "<tr><th>".$cle, ' </th><td> ', $valeur, '</td></tr>';
                }
                echo "</table>";
                ?>


                <h4>Parcours d'un tableau à indexes numériques contigus avec une boucle for() (lc 108)</h4>
                <?php
                // Calcul de la taille du tableau $legumes
                $tailleIngredient = sizeof($ingredient);

                // Parcours du tableau
                echo "<table border=1  class='table'>";
                for ($i = 0; $i < $tailleIngredient; $i++) {
                    echo "<tr><td>".$ingredient[$i]. '</td></tr>';
                }
                 echo "</table>";
                ?>
                
                

                <h3>Tableau particulier : la chaîne de caractères (lc 123)</h3>

                <?php
                $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                //Lecture d'un caractère dans le tableau de chaine de caractères
                ?>

                Lorsque l'on déclare une variable stockant une chaine de caractères 
                PHP va en réalité déclarer un tableau indexé numériquement qui contient N cases de 1 caractère.<br> 
                Ainsi nous pourrons accéder directement à une lettre de la chaîne de caractères de cette manière :
                <?php
                echo "<br><b> Première lettre de l'Alphabet : " . $chaine[1-1] . "</b>";  // Affiche la lettre 'A'
                echo "<br><b> Dernière lettre de l'Alphabet : " . $chaine[26-1] . "</b>";  // Affiche la lettre 'Z'
                ?>


<?php
include '../template/footer.php';
?>