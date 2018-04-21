<?php

/*
 * Il est possible d'utiliser une fonction avant de la définir.
 * Il n'y a donc aucun problème pour définir des fonctions qui s'appellent entre elles.
 */

//Fichier à créer et à modifier au besoin pour ajouter vos propres fonctions
//include("mes_fonctions.php");

/*
 * REGLES DE DEFINITIONS DE FONCTIONS
 * 
 * Ne pas donner de valeur à un paramètre ayant une valeur par défaut 
 * n'est possible qu'en partant de la droite. 
 * Passer une valeur de "vide" ("" ou NULL) ne résout pas le problème 
 * car la valeur en question est convertie par PHP dans le type adéquat 
 * (ici en entier égal à 0).
 * 
 * Exemples interdits de valeur par défaut
 * function produit($valeur1,$valeur2=1+1)... // pas d'expression 
 * function produit($valeur1,$valeur2=$x)... // pas de variable 
 * function produit($valeur1,$valeur2=time())...// pas de fonction
 * Exemple autorisé
 * define("UN",1); // définition d'une constante UN (=1)
 * function D($valeur1=UN,$valeur2=UN)... // constante OK
 * 
 * Exemples interdits pour les paramètres par référence
 * par_référence(2);
 * par_référence(1+1);
 * par_référence(UN); // UN = constante définie précédemment
 * 
 * Passer un nombre insuffisant de paramètres et ne pas avoir de valeur par défaut génère une erreur. 
 * Passer trop de paramètres ne génère pas d'erreur ; les paramètres en trop sont ignorés.
 * 
 * Si plusieurs instructions return sont présentes dans la fonction, 
 * c'est la première rencontrée dans le déroulement des instructions qui définit la valeur de retour 
 * et provoque l'interruption de la fonction.
 * Si la fonction ne présente aucune instruction return (ou si aucune instruction return n'est exécutée), 
 * la valeur de retour de la fonction est NULL.
 * 
 * Les variables utilisées à l'intérieur d'une fonction sont locales : 
 * elles sont non définies en dehors de la fonction et initialisées à chaque appel de la fonction. 
 * Il en est de même des paramètres de la fonction.
 * Réciproquement, une variable définie en dehors de la fonction (dans le script appelant) 
 * n'est pas définie à l'intérieur de la fonction.
 */


function afficherInstructions($contenu) {
    echo "<p><i>" . $contenu . "</i></p>";
}

function afficherTitreJouer($contenu) {
    echo "<h5>" . $contenu . "</h5>";
}

if (!function_exists("paragrapher")) {
  // fonction avec 1 paramètre qui retourne une chaine
  function paragrapher($contenu) {
      return "<p>" . $contenu . "</p>";
  }
}

?>
