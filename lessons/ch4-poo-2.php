<?php
$page="poo";
require_once '../utils/config.inc';
include '../template/header.php';
include("../utils/fonctions.inc");
?>



                <h3> Portée des variables de fonction</h3>

                <h4>Variables Locales (lc 12)</h4>
                <p class="com">
                    Les variables utilisées à l'intérieur d'une fonction sont locales : 
                    elles sont non définies en dehors de la fonction et initialisées à chaque appel de la fonction. 
                    Il en est de même des paramètres de la fonction.
                    Réciproquement, une variable définie en dehors de la fonction (dans le script appelant) 
                    n'est pas définie à l'intérieur de la fonction.
                </p>

                <?php

// définition d'une fonction 
                function les_variables_locales() {
// initialisation de deux variables $x et $z à l'intérieur // de la fonction
                    $x = 0;
                    $z = 3;
// affichage des variables $x, $y et $z
                    echo "Valeur de \$x dans la fonction = $x<BR>";
                    echo "Valeur de \$y dans la fonction = $y<BR>";
                    echo "Valeur de \$z dans la fonction = $z<BR>";
                }

// initialisation de deux variables $x et $y dans le script
// appelant
                $x = 1;
                $y = 2;
// appel de la fonction
                les_variables_locales();
// affichage des variables $x, $y et $z
                echo "<P>";
                echo "Valeur de \$x dans le script = $x<BR>";
                echo "Valeur de \$y dans le script = $y<BR>";
                echo "Valeur de \$z dans le script = $z<BR>";
                ?>


                <h4>Variables Globales (lc 48)</h4>

                <p class="com"> 
                    PHP propose une notion de variable globale pour accéder, 
                    dans une fonction, aux variables définies dans le contexte du script appelant.
                    Pour cela, à l'intérieur de la fonction, il faut déclarer les variables globales 
                    que la fonction utilise avec l'instruction globale.
                    $variable Variable du script appelant que la fonction souhaite utiliser. 
                    Plusieurs variables peuvent être mentionnées, en les séparant par une virgule.
                </p>

                <?

                // définition d'une fonction 
                function definie_et_utilise_variable_globale() {
                    // définition des variables globales (ici $x)
                    global $x;
                    // affichage de $x au début de la fonction
                    echo "Valeur de \$x au début de la fonction = $x<BR>"; // modification de $x et initialisation de $z à l'intérieur
                    // de la fonction
                    $x = 0;
                    $z = 3;
                    // affichage des variables $x, $y et $z
                    echo "Valeur de \$x à la fin de la fonction = $x<BR>";
                    echo "Valeur de \$y dans la fonction = $y<BR>";
                    echo "Valeur de \$z dans la fonction = $z<BR>";
                }

                // initialisation de deux variables $x et $y dans le script // appelant
                $x = 1;
                $y = 2;
                // appel de la fonction
                definie_et_utilise_variable_globale();
                // affichage des variables $x, $y et $z
                echo "<P>";
                echo "Valeur de \$x dans le script = $x<BR>";
                echo "Valeur de \$y dans le script = $y<BR>";
                echo "Valeur de \$z dans le script = $z<BR>";
                ?>
                <p class="com"> Il est possible, sans déclaration, d'accéder aux variables globales à l'intérieur d'une fonction,
                    en utilisant un tableau associatif $GLOBALS géré par PHP. 
                    Dans ce tableau associatif, la clé est égale au nom de la variable globale (sans le $), 
                    et la valeur, à la valeur de la variable globale.

                </p>
                <?

                // définition d'une fonction 
                function utilise_variable_globale_v2() {
                    // affichage de variables globales en utilisant le tableau // $GLOBALS
                    echo "Valeur de \$x au début de la fonction =
            $GLOBALS[x]<BR>";
                    echo "Valeur de \$y au début de la fonction =
            $GLOBALS[y]<BR>";
                    // modification de variables globales en utilisant le tableau $GLOBALS["x"]++;
                    $GLOBALS["y"]++;
                }

                // initialisation de deux variables $x et $y dans le script // appelant
                $x = 1;
                $y = 2;
                // appel de la fonction
                utilise_variable_globale_v2();
                // affichage des variables $x, $y et $z
                echo "<P>";
                echo "Valeur de \$x dans le script = $x<BR>";
                echo "Valeur de \$y dans le script = $y<BR>";
                ?>

                <h4>Variables Statiques (lc 117)</h4>

                <p class="com"> 
                    Par défaut, les variables locales d'une fonction sont réinitialisées à chaque appel de la fonction.
                    L'instruction statique permet de définir des variables locales statiques 
                    Seules les expressions littérales et les constantes sont acceptées comme Valeur initiale affectée à la variable lors du premier appel à la fonction à l'intérieur du script ;
                    les expressions composées ou les fonctions ne sont pas autorisées.
                    <b>La valeur n'est conservée que pendant la durée du script : 
                        lorsque ce dernier se termine, la valeur est perdue 
                        et, au prochain appel du script, la variable statique est réinitialisée</b>
                </p>

                <?php

                // définition d'une fonction 
                function variable_statique() {
                    // définition d'une variable statique 
                    static $variable_statique = 0;
                    // initialisation d'une autre variable 
                    $autre_variable = 0;
                    // affichage des deux variables
                    echo "\$variable_statique = $variable_statique <BR>";
                    echo "\$autre_variable = $autre_variable<BR>";
                    // incrémentation des deux variables $variable_statique++;
                    $autre_variable++;
                }

                // premier appel de la fonction
                echo "<B>Premier appel de la fonction :</B><BR>";
                variable_statique();
                // autres instructions ...
                // deuxième appel de la fonction
                echo "<B>Deuxième appel de la fonction<+>:</B><BR>";
                variable_statique();
                // autres instructions ...
                // troisième appel de la fonction
                echo "<B>Troisième appel de la fonction :</B><BR>";
                variable_statique();
                ?>

                <h3>Portée des Constantes dans les fonctions (lc 157)</h3>

                <p class="com"> 
                    tout comme pour les variables, La portée des constantes est le script dans lequel elles sont définies.<br>
                    À la différence des variables, cette portée s'étend aux fonctions appelées dans le script :
                    une constante peut être utilisée à l'intérieur de la fonction sans qu'elle soit déclarée globale.
                    Réciproquement, une constante définie dans une fonction peut être utilisée dans un script, après appel de la fonction.</b>
                </p>

                <?php
                // définition d'une constante dans le script 
                define("CONSTANTE_SCRIPT", "constante script"); // définition d'une fonction

                function utilise_constante() {
                    // qui définit une constante 
                    define("CONSTANTE_FONCTION", "constante fonction"); // qui affiche une constante du script appelant
                    echo "Dans la fonction, CONSTANTE_SCRIPT = " .
                    CONSTANTE_SCRIPT . "<BR>";
                }

                // appel de la fonction
                utilise_constante();
                // affichage de la constante définie dans la fonction 
                echo "Dans le script, CONSTANTE_ FONCTION = " .
                CONSTANTE_FONCTION . "<BR>";
                ?>

                <h3> Portée des parametres de fonction </h3>


                <h4>Travail par valeurs (lc 187)</h4>

                <p class="com"> 
                    Par défaut, le passage des paramètres s'effectue par valeur : 
                    c'est une copie de la valeur qui est passée à la fonction. 
                    En conséquence, la modification des paramètres à l'intérieur de la fonction n'a aucun effet sur les valeurs dans le script appelant.
                </p>
                <?

                //Passage par référence
                // définition d'une fonction qui prend un paramètre par valeur
                function par_valeur($paramètre) {
                    // incrémentation du paramètre
                    $paramètre++;
                    // affichage du paramètre à l'intérieur de la fonction 
                    echo "\$paramètre = $paramètre<BR>";
                }

                // initialisation d'une variable
                $x = 1;
                // affichage de la variable avant l'appel à la fonction
                echo "\$x avant appel = $x<BR>";
                // appel de la fonction en utilisant la variable comme valeur // du paramètre
                par_valeur($x);
                // affichage de la variable après l'appel à la fonction
                echo "\$x après appel = $x<BR>";
                ?>

                <h4>Travail par référence (lc 215)</h4>
                <p class="com"> 
                    En cas de besoin, il est possible d'avoir un passage par référence 
                    en utilisant l'opérateur de référence & 
                    devant le nom du paramètre dans la définition de la fonction. 
                    Avec une telle définition, c'est une référence vers la variable (plus une copie) qui est passée à la fonction
                    cette dernière travaille directement sur la variable du script appelant.
                </p>


                <?

                // définition d'une fonction qui prend un paramètre
                function par_référence(&$paramètre) {
                    // incrémentation du paramètre
                    $paramètre++;
                    // affichage du paramètre à l'intérieur de la fonction echo "\$paramètre = $paramètre<BR>";
                }

                // initialisation d'une variable
                $x = 1;
                // affichage de la variable avant l'appel à la fonction
                echo "\$x avant appel = $x<BR>";
                // appel de la fonction en utilisant la variable comme valeur // du paramètre
                par_référence($x);
                // affichage de la variable après l'appel à la fonction
                echo "\$x après appel = <B>$x</B><BR>";
                ?>


<?php
include '../template/footer.php';
?>