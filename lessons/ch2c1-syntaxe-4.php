<?php
$page="syntaxe";
require_once '../utils/config.inc';
include '../template/header.php';
?>

                <h3>Structures Conditionnelles suite </h3>

                <?php
                    // comparateur de nombres
                    echo "<h5>Jouons avec les Nombres</h5>";
                    $x = 3;
                    $y = 7;
                    $z = "7";
                    echo "<p>X = $x ; Y = $y ; Z = '$z'</p>";
                    echo "<ul>";
                    // Egalité
                    $test = "(x == y)";
                    if ($x == $y) {
                        echo "<li class='vrai'>$test : c'est VRAI</li>";
                    } else {
                        echo "<li class='faux'>$test : c'est FAUX</li>";
                    }
                    $test = "(y == z)";
                    if ($y == $z) {
                        echo "<li class='vrai'>$test : c'est VRAI</li>";
                    } else {
                        echo "<li class='faux'>$test : c'est FAUX</li>";
                    }
                    //Egalité Stricte
                    $test = "(x === y)";
                    if ($x === $y) {
                        echo "<li class='vrai'>$test : c'est VRAI</li>";
                    } else {
                        echo "<li class='faux'>$test : c'est FAUX</li>";
                    }
                    $test = "(y === z)";
                    if ($y === $z) {
                        echo "<li class='vrai'>$test : c'est VRAI</li>";
                    } else {
                        echo "<li class='faux'>$test : c'est FAUX</li>";
                    }

                    echo "</ul>";
                    
                    ?>
                    
                    <p>Sur le modèle précédent, compléter le code (tag : TODO_2) pour implémenter les tests suivants</p>
                    <img src="../medias/img/jouons_numeric.png">
                    
                    <?
                    
                    // comparateur de nombres
                    echo "<h5>Jouons avec les Nombres : A vous de jouer !</h5>";
                    echo "<ul class='jouer'>";                    
                    //TODO_2 : Compléter le code dans le fichier correspondant
                    include ($correctionPath."/TODO_2.php");
                    echo "</ul>";
                    
                    ?>

                    

<?php
include '../template/footer.php';
?>