<?php
$page="syntaxe";
require_once '../utils/config.inc';
include '../template/header.php';
?>

                <h3>Structures Conditionnelles suite </h3>
                    
                    <h5>Jouons avec les Booléens</h5>
                    <p>Sur le modèle précédent, implémenter le code (tag : TODO_3) pour implémenter les tests suivants</p>
                    <img src="../medias/img/jouons_bool.png">
                        
                     <?
                    
                    // opérandes de booléen
                    echo "<h5>Jouons avec les Booléens : A vous de jouer !</h5>";
                    echo "<ul class='jouer'>";                 
                    //TODO_3 : Compléter le code dans le fichier correspondant
                    include ($correctionPath."/TODO_3.php");
                    echo "</ul>";
                    ?>

<?php
include '../template/footer.php';
?>