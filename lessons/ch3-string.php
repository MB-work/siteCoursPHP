<?php
$page="string";
require_once '../utils/config.inc';
include '../template/header.php';
?>

 <h3>Déclaration de Chaînes et de Caractères </h3>
                
                <?php
                
                // Par convention, un caractère se déclare entre 'quotes simples'
                $unCaractere = 'C';   
                // Par convention, une chaine se déclare entre "doubles quotes"
                $uneChaine = "Chaîne de Caractère";
                
                //Par convention, car le PHP est faiblement typé
                //Contrairement à d'autres languages où cette distinction est importante                
                var_dump($unCaractere);
                echo "<br>";
                var_dump($uneChaine);

                    $uneChaineDQ = "Aujourd'hui il fait beau!";
                    $uneChaineSQ = 'il a dit "Bonjour" en arrivant';
                    
                   
                ?>
                
                <p>Ceci est une chaine de caractères entre doubles quotes 
                   qui peut facilement contenir des apostrophes 
                    <br> exemple : <? echo $uneChaineDQ; ?></p>
                
                <p>Ceci est une chaine de caractères entre simples quotes 
                   qui peut facilement contenir des guillemets 
                   <br> exemple : <? echo $uneChaineSQ; ?>.</p>
                
                <h4>Séquences d'échappement (lc 36) </h4>
                
                <p class="com">Les guillemets présents dans une chaîne délimitée par des guillemets 
                ou les apostrophes présents dans une chaîne délimitée par des apostrophes doivent être "échappés", 
                c'est-à-dire précédés du caractère anti-slash (\). 
                <br>
                En complément, un anti-slash présent en fin de chaîne, juste avant le guillemet ou l'apostrophe final, 
                doit lui aussi être échappé par un anti-slash.</p>
                
                <?
                    $uneChaineSQ = 'Aujourd\'hui il fait beau!';
                    $uneChaineDQ = "il a dit \"Bonjour\" en arrivant";
                    $uneChaineSlash = "C:\\dossier\\";
  
                ?>
                
                <p>Ceci est une chaine de caractères entre doubles quotes 
                   qui peut facilement contenir des apostrophes 
                    <br> exemple : <? echo $uneChaineDQ; ?></p>
                
                <p>Ceci est une chaine de caractères entre simples quotes 
                   qui peut facilement contenir des guillemets 
                   <br> exemple : <? echo $uneChaineSQ; ?>.</p>
                
                <p>Ceci est une chaine de caractères contenant des Slash
                   <br> exemple : <? echo $uneChaineSlash; ?></p>
                
                <p class="com">
                    En complément, d'autres séquences d'échappement peuvent être utilisées dans les chaînes délimitées par des guillemets, <br>
                    <b>mais pas dans celles délimitées par des apostrophes</b>
                </p>
                
                <img src="../medias/img/sequence_echap.png">
                
                <h3>la chaîne de caractères : un tableau particulier (lc 70) </h3>

                <?php
                $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                //Lecture d'un caractère dans le tableau de chaine de caractères
                ?>

                <p class="com">Lorsque l'on déclare une variable stockant une chaine de caractères, 
                PHP va en réalité déclarer un tableau indexé numériquement qui contient N cases de 1 caractère. </p>
                Ainsi nous pourrons accéder directement à une lettre de la chaîne de caractères de cette manière :
                <?php
                echo "<br><b> Première lettre de l'Alphabet : " . $chaine[1-1] . "</b>";  // Affiche la lettre 'A'
                echo "<br><b> Dernière lettre de l'Alphabet : " . $chaine[26-1] . "</b>";  // Affiche la lettre 'Z'
                ?>
                
             
               

<?php
include '../template/footer.php';
?>