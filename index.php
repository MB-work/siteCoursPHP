<?php

require_once './utils/config.inc';

?>
<!DOCTYPE html>
</html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="medias/css/bootstrap.min.css" />
    <link rel="stylesheet" href="medias/css/perso.css" />
    <script type="application/javascript" src="medias/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="row">
            <h1>Cours de PHP</h1>


        </header>
  
    <div class="row">
        <nav class="col-sm-3">
            <? include 'template/navig_1.php'; ?>
        </nav>

        <section class="col-sm-9">
            <article class="jumbotron">

                <h2>Introduction</h2>
                <p>Ce cours de PHP contient toutes les informations et exemples nécessaires pour manipuler&nbsp;:
                    <ul>
                        <li>les variables</li>
                        <li>les tableaux</li>
                        <li>les méthodes</li>
                        <li>les objets</li>
                        <li>les formulaires</li>
                        <li>les bases de données</li>
                    </ul>
                </p>

                <h2>Travail demandé</h2>
                <p>
                    <ol>
                        <li>Lire le code source des pages php</li>
                        <li>Ajouter une page HTML au menu qui contiendra vos réponses aux questions de cours</li>
                        <li>Implémenter toutes les demandes relatives aux tags TODO_X</li>
                        <li>Ajouter un lien à l'encart "fonctions utiles à tester!" vers votre manuel PHP personnel <br/>cette page contiendra : 
                            <ul>
                                <li>le nom de chaque fonction</li>
                                <li>la liste de ces paramètres</li>
                                <li>son type de retour</li>
                                <li>une brève description de son utilité REDIG&Eacute; PAR VOS SOINS</li>
                                <li>un exemple de mise en oeuvre</li>
                            </ul>
                        </li>
                    </ol>
                </p>

            </article>
        </section>    


    </div>


    <footer class="row">Cour de PHP - Marie.Barbier@stjodijon.com</footer>

</body>
</html>