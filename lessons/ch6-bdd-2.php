<?php
$page="bdd";
require_once '../utils/config.inc';
include("../utils/fonctions.inc");
include '../template/header.php';
?>
              
                
                <?php
                
                
                        afficherTitreJouer("Jouons avec les Bases de données : A vous de jouer !");
                        $exo = "Réécrire le code vu dans le chapitre précédent en utilisant la totalité de la classe Pizza que vous avez modifiée dans l'exercice précédent";
                        afficherInstructions("compléter le code (tag : TODO_11)  pour " . $exo);
                        echo "<ul class='jouer'>";
                        //TODO_11 : Compléter le code dans les fichiers correspondants pour appeler votre fonction
                        include ($correctionPath . "/TODO_11.php");
                        echo "</ul>";
                ?>

  ?>



<?php
include '../template/footer.php';
?>