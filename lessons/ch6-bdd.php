<?php
$page="bdd";
require_once '../utils/config.inc';
include("../utils/fonctions.inc");
include '../template/header.php';
?>
                <h2>Consulter une base de données </h2>

                <h4>Carte des pizzas</h4>
                <table class="carteTAB">
                    <tr><th>Base</th><th>Pizza</th><th>taille</th><th>Prix</th></tr>
                    <?

                    /*
                    Exemple avec mysqli en procédural : 
                    */
                   
                    // connexion à la base de données à l'aide des constantes définies précédemment
                    $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS,DB_BDD); 
                    
                    //// selection de la base de données à l'aide des constantes définies précédemment
                    mysqli_select_db($link ,DB_BDD); 
                    
                    //écriture de notre requête
                    $sql = "SELECT * FROM pizzas INNER JOIN carte on carte.identifiant_pizza = pizzas.identifiant  order by base";
                    
                    //envoie de la requête et récupération du résultat
                    $lesPizzas = mysqli_query($link, $sql) or die('Erreur SQL ! <br/>' . $sql . '<br/>' . mysqli_error($link));

                    // Parcours de chacune des tuples du résultat avec la méthode mysql_fetch_assoc
                    while ($unePizza = mysqli_fetch_assoc($lesPizzas)) {
                        
                        // fonction qui permet de récupérer dans des variables individuelles chacune des associations clé/valeur du tableau
                        extract($unePizza);
                        ?>
                    
                        <tr><td><? echo $base; ?></td><td><? echo $nom; ?></td><td><? echo $taille;?></td><td><? echo $prix;?> euros</td>
                        <td colspan="4"><? echo $description; ?></td></tr>

                        <?
                    }
                    // libération du jeu de résultat
                    mysqli_free_result($lesPizzas);
                    //fermeture de la connection   
                    mysqli_close($link);
                 ?>
                </table>


            ?>



<?php
include '../template/footer.php';
?>