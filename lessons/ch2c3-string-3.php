<?php
$page="string";
require_once '../utils/config.inc';
include '../template/header.php';
?>
                
               <h3>Manipuler les Dates</h3>
               
               <p class="com">
                   PHP ne gère pas les dates avec un type de donnée spécifique. 
                   Néanmoins, des dates peuvent être manipulées, 
                   <br> - soit sous la forme d'une chaîne de caractères, 
                   <br> - soit sous la forme d'un timestamp Unix (correspondant au nombre de secondes écoulées depuis le 1er janvier 1970 01:00:00).
               </p>

               
               <?php
               
               //La fonction convertit en chaîne une date donnée sous la forme d'un timestamp Unix. 
               
                // sans deuxième paramètre = utilisation du timestamp courant 
                echo "Format long (anglais uniquement) : ",date("l j F Y"),"<BR>";
                echo "Date au format JJ/MM/AAAA : ",date("d/m/Y"),"<BR>";
                echo "Date au format J/M/AA : ",date("j/n/y"),"<BR>"; 
                echo "Heure : ",date("H:i:s"),"<BR>"; 
                echo "<br>";
                echo "Utilisation du \ : ",date("\N\o\u\s \s\o\m\m\e\s \l\e d/m/Y."),"<BR>"; 
                echo "Utilisation sans \ : ",date("Nous sommes le d/m/Y."),"<BR>"; 
                echo "<br>";
                // avec deuxième paramètre =  nombre de secondes écoulées depuis le 1er janvier 1970 01:00:00
                echo "Unix a fêté sa milliardième seconde le ", date("d/m/Y à H:i:s",1000000000),"<BR>";
?>
               <h4>Spécifications du format Date</h4>
               <img src="../medias/img/dates.png">
               
             
               

<?php
include '../template/footer.php';
?>