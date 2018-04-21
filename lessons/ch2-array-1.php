<?php
$page="array";
require_once '../utils/config.inc';
include '../template/header.php';
?>


                <?php
               
                
                 echo "<p>compléter le code (tag : TODO_4) 
                        pour implémenter le parcours du tableau \$ingredient à l'aide des instructions while / do-while</p>";
                    echo "<h5>Jouons avec les Boucles : A vous de jouer !</h5>";
                    echo "<ul class='jouer'>";  
                    include ($correctionPath."/TODO_4.php");
                    echo "</ul>";
                    
                ?>

             

<?php
include '../template/footer.php';
?>