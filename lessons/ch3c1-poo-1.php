<?php
$page="poo";
require_once '../utils/config.inc';
include '../template/header.php';
?>


                <h3>Déclarer et utiliser ses propres fonctions</h3>

                <p class="com">
                    une fonction est là pour faire qqch de précis
                    en fonction des paramètres reçus
                    généralement, elle retourne qqch
                    si elle ne retourne rien, alors elle modifie le contexte
                    (affichage, écriture dans un fichier, changement de valeur des variables globales,
                    changement de valeur des paramètres passés par référence...) 
                </p>

                <?
                /*
                 * une fonction se définit par sa signature
                 * celle-ci comporte 
                 * - éventuellement, la portée de la fonction
                 * - en php, on ne précise pas le type de retour de la fonction
                 * - le nom de la fonction
                 * - entre parenthèses, les paramètres de la fonction
                 */

                // fonction sans paramètre qui affiche " Bonjour ! " 
                // pas de valeur de retour
                function afficher_bonjour() {
                    echo "Bonjour !<BR>";
                }

                // fonction avec 1 paramètre qui retourne une chaine
                function paragrapher($contenu) {
                    return "<p>" . $contenu . "</p>";
                }

                // fonction avec 2 paramètres qui retourne la somme 
                // des deux paramètres
                function somme($valeur1, $valeur2) {
                    return $valeur1 * $valeur2;
                }

                // définition de la fonction somme avec des valeurs 
                // par défaut pour les paramètres
                function sommeDefaut($valeur1 = 1, $valeur2 = 2) {
                    return $valeur1 * $valeur2;
                }

                // utilisation de la fonction afficher_bonjour 
                afficher_bonjour();

                // utilisation de la fonction produit
                echo paragrapher("Voici des appels aux fonctions d'additions");

                // utilisation de la fonction somme
                // - dans une affectation
                $résultat = somme(2, 4);
                echo "$résultat<BR>";
                // - dans une comparaison 
                if (somme(8, 5) > 10) {
                    echo "Le résultat est supérieur à 10.<BR>";
                }
                // - dans une affectation et une comparaison (non recommandé car peu de lisibilité !!) 
                if (($résultat = somme(6, 7)) > 10) {
                    echo "$résultat est supérieur à 10.<BR>";
                }
                ?>
                <h4>Les types de retours (lc 71)</h4>
                <p class="com">
                    Si plusieurs instructions return sont présentes dans la fonction, 
                    c'est la première rencontrée dans le déroulement des instructions qui définit la valeur de retour 
                    et provoque l'interruption de la fonction.
                    Si la fonction ne présente aucune instruction return (ou si aucune instruction return n'est exécutée), 
                    la valeur de retour de la fonction est NULL.
                </p>
                <?

                // définition d'une fonction avec deux appels à return 
                function valeur_retour($paramètre) {
                    if ($paramètre == 1) {
                        return "Premier return";
                    }
                    return "Deuxième return";
                }

                // appels à la fonction
                echo "valeur_retour(1) = " . valeur_retour(1) . "<BR>";
                echo "valeur_retour(0) = " . valeur_retour(0) . "<BR>";
                ?>

                <h4>Les passages de Paramètres (lc 94)</h4>
                <p class="com"> Les paramètres éventuels de la fonction sont définis sous la forme d'une liste de variables. 
                    Il est possible de définir une valeur par défaut pour un paramètre 
                    ou d'utiliser une liste variable de paramètres (aussi appelés arguments)
                    </ul>
                </p>
                <?

                // définition de la fonction soustraction avec des valeurs // par défaut pour les paramètres
                function produit($valeur1 = 5, $valeur2 = 10) {
                    return $valeur1 * $valeur2;
                }

                // appels
                // - sans paramètre
                echo "produit() = " . produit() . "<BR>";
                // - avec un seul paramètre = forcément le premier 
                echo "produit(3) = " . produit(3) . "<BR>";
                // - avec un seul paramètre = le deuxième ?
                //echo "produit(,4) = ".produit(,4)."<BR>"; <---  /!\ interdit
                // =>comment contourner le problème ?
                echo "produit(\"\",4) = " . produit("", 4) . "<BR>";
                echo "produit(NULL,4) = " . produit(NULL, 4) . "<BR>";
                /*
                 *
                 */
                ?>

                <p class="com">Ne pas donner de valeur à un paramètre ayant une valeur par défaut n'est possible qu'en partant de la droite. 
                    Passer une valeur de "vide" (""&nbsp;ou&nbsp;NULL) ne résout pas le problème 
                    car la valeur en question est convertie par PHP dans le type adéquat (ici en entier égal à 0).</p>

                <p class="com">  <b>Exemples interdits de valeur par défaut</b>
                    <br>function produit($valeur1,$valeur2=1+1)... // pas d'expression 
                    <br>function produit($valeur1,$valeur2=$x)... // pas de variable 
                    <br>function produit($valeur1,$valeur2=time())...// pas de fonction
                    <br><b>Exemple autorisé</b>
                    <br>define("UN",1); // définition d'une constante UN (=1)
                    <br>function D($valeur1=UN,$valeur2=UN)... // constante OK
                </p>


<?php
include '../template/footer.php';
?>