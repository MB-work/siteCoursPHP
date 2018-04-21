<?php
$page="syntaxe";
require_once '../utils/config.inc';
include '../template/header.php';
?>

                <h3>Structures Conditionnelles suite </h3>
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

                    //  On peut utiliser une méthode qui renvoie un booléen
                    if (!is_numeric($unEntier)) {
                        echo "<p>Huston! on a un soucis</p>";
                    } else if (!is_string($uneChaine)) {
                        echo "<p>Huston! on a un soucis</p>";
                    } else if (!is_array($unTableauVide)) {
                        echo "<p>Huston! on a un soucis</p>";
                    } else {
                        echo '<p>Tout va bien dans le meilleur des mondes</p>';
                    }

                    // ou on peut utiliser une méthode qui renvoie un booléen
                    echo "<h5>pour la valeur : $unEntier</h5>";
                    if (is_numeric($unEntier)) {
                        echo "<p>c'est un nombre</p>";
                    } else {
                        echo "<p>ce n'est pas un nombre</p>";
                    }

                    echo "<h5>pour la valeur : $uneChaine</h5>";
                    if (!is_string($uneChaine)) {
                        echo "<p>ce n'est pas une chaine</p>";
                    } else {
                        echo "<p>c'est une chaine</p>";
                    }

                    echo "<h5>pour la valeur : $unTableauVide</h5>";
                    if (!is_array($unTableauVide)) {
                        echo "<p>ce n'est pas un tableau</p>";
                    } else {
                        echo "<p>c'est un  tableau</p>";
                    }
                    
                    echo "<p>Sur le modèle précédent compléter le code (tag : TODO_1) 
                        pour implémenter les tests correspondants aux fonctions utiles à tester!</p>";
 
                    // test de type de variables
                    echo "<h5>Jouons avec les fonctions : A vous de jouer !</h5>";
                    echo "<ul class='jouer'>";                    
                    //TODO_1 : Compléter le code dans le fichier correspondant
                    include ($correctionPath."/TODO_1.php");
                    echo "</ul>";
?>

<?php
include '../template/footer.php';
?>