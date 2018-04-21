<?php
$page="string";
require_once '../utils/config.inc';
include '../template/header.php';
?>

                <h3>Manipulations spécifiques</h3>
                
                <p class="com">Il existe de nombreuses fonctions pour travailler avec les chaines de caractères.<br>
                Voir Encart "fonctions utiles à tester!", en haut à droite</p>
                
                <?php         
                
                    echo "<p>compléter le code (tag : TODO_6) 
                        pour implémenter vos propres tests avec les fonctions de manipulation de chaines de caractères</p>";
                    echo "<h5>Jouons avec les Chaines : A vous de jouer !</h5>";
                    echo "<ul class='jouer'>";                    
                    //TODO_6 : Compléter le code ici
                    include ($correctionPath."/TODO_6.php");
                    echo "</ul>";

                ?>
          
               

<?php
include '../template/footer.php';
?>