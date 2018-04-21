<?php
$page="exemple";
require_once '../utils/config.inc';
include '../template/header.php';
?>

<?
                if (isset($_POST["validation"]) && $_POST["validation"] = "Envoyer") {
                    
                    $categorie = $_POST["categorie"];
                    $libelle = $_POST["libelle"];
                    $conditionnement = $_POST["conditionnement"];

                    if (!empty($libelle)) {
                        
                        // connexion au serveur de base de données à l'aide des constantes définies précédemment
                            $mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASS,DB_BDD);

                            //écriture de notre requête
                            $sql = "INSERT INTO Ingredient (libelle,conditionnement,categorie_alimentaire) VALUES".
                            "('$libelle','$conditionnement',$categorie);";
                            //envoie de la requête et récupération du résultat
                            $res = $mysqli->query($sql) ;
                            
                        if ($res){
                            $message = "Votre Ingredient a bien été inséré en base!";
                            $class="vrai";
                        } else {
                            $message = $mysqli->error;
                            $class="faux";
                        }
                                          
                        //Fermeture de la connexion
                        $mysqli->close();
                        
                    } else {
                        $message = "ERREUR : le nom de l'ingrédient est vide";
                        $class="faux";
                    }
                } else {
                    $message = "ERREUR : vous n'avez rien à faire sur cette page !";
                    $class="faux";
                    
                }

                echo "<ul><li class='$class'>" . $message . "</li></ul>";
                ?>

<?php
include '../template/footer.php';
?>