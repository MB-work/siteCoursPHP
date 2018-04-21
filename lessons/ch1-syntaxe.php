<?php
$page="syntaxe";
require_once '../utils/config.inc';
include '../template/header.php';
?>

<p>C'est ici que le cours commence.</p>

                <?php
                // ceci est un commentaire sur une ligne

                /*
                 * ceci est 
                 * un commentaire
                 * sur plusieurs lignes
                 */
                ?>

                <h3>déclaration de constantes (lc 19)</h3>

                <?php
                $unBool = define("maConstante", 42, true); // définit une constante nommée maConstante dont la valeur est 42, 
                //le dernier paramètre indique que le nom de la constante est INsensible à la casse
                //la fonction renvoie à vrai si la constante a bien pu être définie, sinon elle renvoie à faux
                //echo "<pre>";
                echo $unBool . "<br>"; //Le point (.) permet de concaténer des chaines de caractères
                echo "<ul>";
                echo "<li>" . maconstante . "</li>";
                echo "<li>" . maConstante . "</li>";
                echo "<li>" . MaConstante . "</li>";
                echo "<li>" . MACONSTANTE . "</li>";
                echo "</ul>";
                //echo "</pre>";

                $unBool = define("AUTEUR", "Mario Bross"); // définit une constante nommée AUTEUR dont la valeur est Mario Bross, 
                //Par convention les noms de constantes sont TOUJOURS en MAJUSCULES
                //par défaut le dernier paramètre peut être omis, la constante sera donc SENSIBLE à la casse
                //echo "<pre>";
                echo $unBool . "<br>";
                echo "<ul>";
                echo "<li>" . auteur . "</li>";
                echo "<li>" . Auteur . "</li>";
                echo "<li>" . AUTEUR . "</li>";
                echo "</ul>";
                //echo "</pre>";
                ?>

                <h3>déclaration de Variables (lc 48)</h3>
                
                <p class="com">En PHP, les variables sont identifiées par le préfixe $ suivi d'un nom de variable<br/>
                    Une variable est une zone mémoire identifiée par un nom qui contient une valeur lisible ou modifiable dans le programme.<br/>
                    Le signe égal permet d'affecter cette valeur à la variable<br/>
                    Le nom des variables est sensible à la casse : $nom et $Nom sont vus par PHP comme deux variables différentes.</p>

                    <?php

                    $nom = "Mario";

                    //echo "<pre>";
                    echo $nom;
                    echo "<br>";
                    echo $Nom;
                    //echo "</pre>";
                    
                    $Nom = "Bross";
                    
                    //echo "<pre>";
                    echo $nom;
                    echo "<br>";
                    echo $Nom;
                    //echo "</pre>";

                    ?>
                <p class="com">
                     Les variables PHP sont automatiquement définies lors de leur première utilisation. 
                     <br/> Il n'y a pas d'instruction spécifique pour créer une variable.
                     <br/> 
                     <br/> Les variables PHP sont typées automatiquement ; 
                     <br/> lors de chaque affectation d'une valeur à une variable, le type de la variable est automatiquement défini ou redéfini
                     </p>
                     
                     <?

                    $unEntier = 24;
                    $unDouble = 12.90;
                    $uneChaine = "Regina";
                    $unBool = true;
                    $unTableauVide = array();
                    $duNul = NULL;
                    ?>

                <h4>Types de données en PHP (lc 92)</h4>

                <p class="com">PHP propose 4 types de données scalaires (ne pouvant contenir qu'une valeur), <br>
                    2 types composés (pouvant contenir plusieurs valeurs) et 2 types spéciaux :
                <ul> <li>Types scalaires :</li>
                    <ul> 
                        <li> nombre entier : 
                            <pre><?= $unEntier; ?></pre> 
                            <i><? var_dump($unEntier); ?></i></li>
                        <li> nombre à virgule flottante : 
                            <pre><?= $unDouble; ?></pre> 
                            <i><? var_dump($unDouble); ?></i></li> 
                        <li> chaîne de caractère : 
                            <pre><?= $uneChaine; ?></pre>  
                            <i><? var_dump($uneChaine); ?></i></li>
                        <li> booléen : 
                            <pre><?= $unBool; ?></pre> 
                            <i><? var_dump($unBool); ?></li></i></ul>
                    
                    <li>Types composés </li>
                    <ul> <li> tableau : 
                            <pre><?= $unTableauVide; ?></pre> 
                            <i><? var_dump($unTableauVide); ?></i></li>
                        <li> objet  : 
                            <i>Voir chapitre correspondant</i></li></ul>
                    
                    <li>Types spéciaux : <ul> 
                            <li> NULL : 
                                <pre><?= $duNul; ?></pre> 
                                <i><? var_dump($duNul); ?> </i></li>
                            <li> Ressource : 
                                <i>Ce type générique, introduit dans PHP 4, est un peu particulier, 
                                et correspond à une référence vers une ressource externe : 
                                fichier ouvert, connexion de base de données, etc.</i></li></ul>
                </ul>
            </p>

            <p class="com">
            La portée d'une variable est le script dans lequel elle est définie. 
            Une variable peut donc être définie dans une première section de code PHP et utilisée dans une autre section de code PHP du même script.
            La durée de vie d'une variable est le temps de l'exécution du script. Lorsque le script se termine, les variables sont supprimées. Si le même script est appelé plus tard, de nouvelles variables sont définies.
            </p>


                    
            <h3>Opérateurs combinés (lc 137)</h3>
             <p class="com">Les opérateurs somme (+), différence (-), multiplication (*), division (/), modulo (%) et concaténation (.) 
                 peuvent être combinés avec l'opérateur d'affectation (=) selon la syntaxe suivante :</p>
             <p class="com">Attention cependant, parfois, pour les calculs très précis, le comportement peut être aléatoire... :-/ <br/>
             il est donc préférable d'utiliser la syntaxe longue</p>
            <img src="../medias/img/autres_operateurs.png">

<?php
include '../template/footer.php';
?>