<?php
$page="array";
require_once '../utils/config.inc';
include '../template/header.php';
?>



                <h3>Les tableaux multidimensionnels (lc 9)</h3>
                <?php
                // Déclaration de la matrice
                $matrice = array();
                $matrice[0] = array('X', 'O', 'X');
                $matrice[1] = array('X', 'X', 'O');
                $matrice[2] = array('X', 'O', 'O');
                ?>          

                <h4> Accès à la valeur de coordonnées (1,1) (lc 18)</h4>
                <?php
                // Retourne X
                echo $matrice[1][1];            
                
                    echo "<p>compléter le code (tag : TODO_5) 
                        pour implémenter l'affichage de la matrice précédente</p>";
                    echo "<h5>Jouons avec les Matrices : A vous de jouer !</h5>";
                    echo "<ul class='jouer'>";                  
                    //TODO_1 : Compléter le code ici
                    include ($correctionPath."/TODO_5.php");
                    echo "</ul>";

                ?>
                
                

<?php
include '../template/footer.php';
?>