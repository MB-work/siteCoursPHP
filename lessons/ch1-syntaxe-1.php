<?php
$page="syntaxe";
require_once '../utils/config.inc';
include '../template/header.php';
?>

                <h3>Structures Conditionnelles (lc 6)</h3>

                   <h4>Condition de CHOIX (lc 9)</h4>
                    
                    <?php
                    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    //les chaines de caractères se comportent comme des tableaux de lettres;
                    $nb = rand(0,strlen($alphabet)-1); // strlen permet de connaitre la taille d'une chaine de caractères
                    // rand permet d'obtenir un nombre aléatoire   
                    echo "vous avez tiré la lettre : ".$alphabet[$nb]." ( position $nb)<br/>";
                    
                    switch ($alphabet[$nb]) {
                        case "A":
                            echo "cette lettre est la première de l'alphabet<br/>";
                        case "B":
                        case "C":
                        case "D":
                        case "E":
                          echo "cette lettre est une note européenne<br/>";
                        break;
                        case "Z":
                            echo "cette lettre est la dernière de l'alphabet<br/>";
                        case "Y":
                        case "X":
                          echo "cette lettre est une inconnue mathématique<br/>";
                        break;
                        default :
                            echo "c'est juste une lettre !<br/>";
                        
                      }
                      
                      // variante d'écriture du Switch
                      switch ($alphabet[$nb]) :
                        case "a":
                            echo "cette lettre est la première de l'alphabet<br/>";
                        case "b":
                        case "c":
                        case "d":
                        case "e":
                          echo "cette lettre est une note européenne<br/>";
                        break;
                        case "z":
                            echo "cette lettre est la dernière de l'alphabet<br/>";
                        case "y":
                        case "x":
                          echo "cette lettre est une inconnue mathématique<br/>";
                        break;
                        case "f":case "g":case "h":case "i":case "j":case "k":case "l":case "m":
                            case "n":case "o":case "p":case "q":case "r":case "s":
                                case "t":case "u":case "v":case "w":
                          echo "c'est juste une lettre<br/>";
                        break;
                        default :
                            echo "lettre inconnue !<br/>";
                        
                      endswitch;

                    
                    ?>
                
                <h4>Conditions SI/SINON (lc 67)</h4>

                    <?php

                    //RAPPEL DU sous-chapitre précédent :
                    $unBool = define("maConstante", 42, true); // définit une constante nommée maConstante dont la valeur est 42, 
                    $unBool = define("AUTEUR", "Mario Bross"); // définit une constante nommée AUTEUR dont la valeur est Mario Bross, 
                    $unEntier = 24;
                    $unDouble = 12.90;
                    $uneChaine = "Regina";
                    $unBool = true;
                    $unTableauVide = array();
                    $duNul = NULL;

                    // une condition de test dans une structure conditionnelle se fait grâce au signe ==
                    // ATTENTION : si on n'utilise qu'un seul signe = c'est une affectation
                    if (maConstante == 42) {
                        echo "<p>" . maConstante . " : Ceci est la réponse, mais quelle est la question?<p>";
                    }
                    
                    //Variante de l'écriture d'un IF
                    if (maConstante != 42) :
                        echo "<p>" . maConstante . " : Ceci est la réponse, mais quelle est la question?<p>";
                    endif;
                    

                    // On peut également tester la différence grâce au signe !=
                    if (AUTEUR != "Mario Bross") {
                        echo "<p>Vous avez changé la valeur de la constante AUTEUR.<p>";
                    } else {
                        echo "<p>Vous n'êtes pas très rigolot, un peu d'initiative que Diable!<p>";
                    }
                    
                    //Variante de l'écriture d'un IF
                    if (AUTEUR == "Mario Bross") :
                        echo "<p>Vous n'avez pas changé la valeur de la constante AUTEUR.<p>";
                     else :
                        echo "<p>Vous êtes un petit malin vous!<p>";
                    endif;
                    
                     // tout comme il ne faut pas confondre = et ==
                    // il ne faut pas confondre == et ===
                    // la triple égalité est l'opérateur permettant de vérifier que la valeur ET le type correspondent
                    $un = 1;
                    $vrai = 1;
                    $true = true;

                    echo "<ul>";
                    if ($un == $vrai) {
                        echo "<li class='vrai'>un ($un) est égal à vrai ($vrai)</li>";
                    } else {
                        echo "<li class='faux'>un ($un) N'EST PAS égal à vrai ($vrai)</li>"; 
                    }
                    if ($un === $vrai) {
                        echo "<li class='vrai'>un ($un) est COMPLETEMENT égal à vrai ($vrai)</li>";
                    } else {
                        echo "<li class='faux'>un ($un)N'EST PAS COMPLETEMENT égal à vrai ($vrai)</li>";
                    }
                    if ($vrai == $true) {
                        echo "<li class='vrai'>vrai ($vrai) est égal à true ($true)</li>";
                    } else {
                        echo "<li class='faux'>vrai ($vrai) N'EST PAS  égal à true ($true)</li>";
                    }
                    if ($vrai === $true) {
                        echo "<li class='vrai'>vrai ($vrai) est COMPLETEMENT égal à true ($true)</li>";
                    } else {
                        echo "<li class='faux'>vrai ($vrai) N'EST PAS COMPLETEMENT égal à true ($true)</li>";
                    }
                    echo "</ul>";
                    ?>

<?php
include '../template/footer.php';
?>