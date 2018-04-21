<?php

/* ****************************************
 * IMPORTANT !!!
 * NE PAS MODIFIER CE FICHIER
 * car il peut être modifié  et renvoyé à chaque cours
 * Si vous avez besoin de définir/redéfinir votre propre config utiliser le fichier ma_config.inc
 * 
 ******************************************** */


$navigation = array();
$navigationSCH  = array();
$fonctions_utiles = array();
$questions_cours = array();

$base_url="http://localhost/siteCoursPHP/";

$navigation["syntaxe"]["titre"]="Syntaxe de Base";
$navigation["syntaxe"]["titre_cours"]="La Syntaxe";
$navigation["syntaxe"]["fichier"]="lessons/ch2c1-syntaxe-.php";
$navigation["array"]["titre_cours"]="Les Tableaux";
$navigation["array"]["titre"]="Manipulation des Tableaux";
$navigation["array"]["fichier"]="lessons/ch2c2-array-1.php";
$navigation["string"]["titre_cours"]="Les Chaines";
$navigation["string"]["titre"]="Manipulation des Chaines et Dates";
$navigation["string"]["fichier"]="lessons/ch2c3-string-1.php";

$navigationSCH["syntaxe"][0]["titre"]="données, variables, constantes";
$navigationSCH["syntaxe"][0]["fichier"]="lessons/ch2c1-syntaxe-1.php";
$navigationSCH["syntaxe"][1]["titre"]="Structure Conditionnelle";
$navigationSCH["syntaxe"][1]["fichier"]="lessons/ch2c1-syntaxe-2.php";
$navigationSCH["syntaxe"][2]["titre"]="TODO-1";
$navigationSCH["syntaxe"][2]["fichier"]="lessons/ch2c1-syntaxe-3.php";
$navigationSCH["syntaxe"][3]["titre"]="TODO-2";
$navigationSCH["syntaxe"][3]["fichier"]="lessons/ch2c1-syntaxe-4.php";
$navigationSCH["syntaxe"][4]["titre"]="TODO-3";
$navigationSCH["syntaxe"][4]["fichier"]="lessons/ch2c1-syntaxe-5.php";

$navigationSCH["array"][0]["titre"]="Affichage";
$navigationSCH["array"][0]["fichier"]="lessons/ch2c2-array-1.php";
$navigationSCH["array"][1]["titre"]="TODO-4";
$navigationSCH["array"][1]["fichier"]="lessons/ch2c2-array-2.php";
$navigationSCH["array"][2]["titre"]="TODO-5";
$navigationSCH["array"][2]["fichier"]="lessons/ch2c2-array-3.php";

$navigationSCH["string"][0]["titre"]="Déclaration";
$navigationSCH["string"][0]["fichier"]="lessons/ch2c3-string-1.php";
$navigationSCH["string"][1]["titre"]="TODO-6";
$navigationSCH["string"][1]["fichier"]="lessons/ch2c3-string-2.php";
$navigationSCH["string"][2]["titre"]="les Dates";
$navigationSCH["string"][2]["fichier"]="lessons/ch2c3-string-3.php";
$navigationSCH["string"][3]["titre"]="TODO-7";
$navigationSCH["string"][3]["fichier"]="lessons/ch2c3-string-4.php";


// LA SYNTAXE !
$questions_cours["syntaxe"][]="Pourquoi un message de WARNING s'affiche-t-il tout en haut?";
$questions_cours["syntaxe"][]="Comment définit-on <u><b><i>normalement</i></b></u> une constante?";
$questions_cours["syntaxe"][]="Quelle est la différence entre : <ul><li>=</li><li>==</li><li>===</li></ul>";
$questions_cours["syntaxe"][]="Qu'affichera : &lt;? echo false; ?&gt;";
$questions_cours["syntaxe"][]="Quel est le seul opérateur de manipulation de chaines de caractères? à quoi sert-il?";
$questions_cours["syntaxe"][]="Comment marche la fonction RAND() ?";
$questions_cours["syntaxe"][]="Pourquoi obtient-on toujours la même réponse au deuxième Switch/case ?";
$questions_cours["syntaxe"][]="à quoi sert la syntaxe &lt;?= \$var; ?&gt; ?";
$questions_cours["syntaxe"][]="Quelle est la différence entre var_dump et echo ?";


$fonctions_utiles["syntaxe"][0]["url"]="http://fr2.php.net/manual/fr/function.empty.php";
$fonctions_utiles["syntaxe"][0]["nom"]="empty()";
$fonctions_utiles["syntaxe"][1]["url"]="http://www.php.net/manual/fr/function.isset.php";
$fonctions_utiles["syntaxe"][1]["nom"]="isset()";
$fonctions_utiles["syntaxe"][2]["url"]="http://fr2.php.net/manual/fr/function.unset.php";
$fonctions_utiles["syntaxe"][2]["nom"]="unset()";
$fonctions_utiles["syntaxe"][3]["url"]="http://fr2.php.net/manual/fr/function.var-dump.php";
$fonctions_utiles["syntaxe"][3]["nom"]="var_dump()";
$fonctions_utiles["syntaxe"][4]["url"]="http://fr2.php.net/manual/fr/function.print-r.php";
$fonctions_utiles["syntaxe"][4]["nom"]="print_r()";
$fonctions_utiles["syntaxe"][5]["url"]="http://fr2.php.net/manual/fr/function.var-export.php";
$fonctions_utiles["syntaxe"][5]["nom"]="var_export()";
$fonctions_utiles["syntaxe"][10]["url"]="http://fr2.php.net/manual/fr/function.is-null.php";
$fonctions_utiles["syntaxe"][10]["nom"]="is_null()";
$fonctions_utiles["syntaxe"][11]["url"]="http://fr2.php.net/manual/fr/function.is-bool.php";
$fonctions_utiles["syntaxe"][11]["nom"]="is_bool()";
$fonctions_utiles["syntaxe"][12]["url"]="http://fr2.php.net/manual/fr/function.is-numeric.php";
$fonctions_utiles["syntaxe"][12]["nom"]="is_numeric()";
$fonctions_utiles["syntaxe"][13]["url"]="http://fr2.php.net/manual/fr/function.is-string.php";
$fonctions_utiles["syntaxe"][13]["nom"]="is_string()";
$fonctions_utiles["syntaxe"][14]["url"]="http://fr2.php.net/manual/fr/function.is-array.php";
$fonctions_utiles["syntaxe"][14]["nom"]="is_array()";
$fonctions_utiles["syntaxe"][15]["url"]="http://fr2.php.net/manual/fr/function.is-object.php";
$fonctions_utiles["syntaxe"][15]["nom"]="is_object()";
$fonctions_utiles["syntaxe"][16]["url"]="http://fr2.php.net/manual/fr/function.is-resource.php";
$fonctions_utiles["syntaxe"][16]["nom"]="is_ressource()";
$fonctions_utiles["syntaxe"][17]["url"]="http://fr2.php.net/manual/fr/function.is-scalar.php";
$fonctions_utiles["syntaxe"][17]["nom"]="is_scalar()";
$fonctions_utiles["syntaxe"][18]["url"]="http://fr2.php.net/manual/fr/function.is-int.php";
$fonctions_utiles["syntaxe"][18]["nom"]="is_int(), is_integer(), is_long()";
$fonctions_utiles["syntaxe"][19]["url"]="http://fr2.php.net/manual/fr/function.is-double.php";
$fonctions_utiles["syntaxe"][19]["nom"]="is_double(), is_float(), is_real()";

// LES TABLEAUX

$questions_cours["array"][]="Pourquoi le parcours avec la boucle for ne donne-t-il pas le même résultat qu'avec le foreach pour la liste des ingrédients?";

$fonctions_utiles["array"][0]["url"]="http://fr2.php.net/manual/fr/function.count.php";
$fonctions_utiles["array"][0]["nom"]="count()";
$fonctions_utiles["array"][1]["url"]="http://fr2.php.net/manual/fr/function.sizeof.php";
$fonctions_utiles["array"][1]["nom"]="sizeof()";
$fonctions_utiles["array"][2]["url"]="http://fr2.php.net/manual/fr/function.sort.php";
$fonctions_utiles["array"][2]["nom"]="sort(), rsort(), ksort()";
$fonctions_utiles["array"][3]["url"]="http://fr2.php.net/manual/fr/function.in-array.php";
$fonctions_utiles["array"][3]["nom"]="in_array()";
$fonctions_utiles["array"][4]["url"]="http://fr2.php.net/manual/fr/function.array-rand.php";
$fonctions_utiles["array"][4]["nom"]="array_rand()";
$fonctions_utiles["array"][5]["url"]="http://fr2.php.net/manual/fr/function.array-search.php";
$fonctions_utiles["array"][5]["nom"]="array_search()";
$fonctions_utiles["array"][6]["url"]="http://fr2.php.net/manual/fr/function.array-key-exists.php";
$fonctions_utiles["array"][6]["nom"]="array_key_exists()";
$fonctions_utiles["array"][7]["url"]="http://fr2.php.net/manual/fr/function.explode.php";
$fonctions_utiles["array"][7]["nom"]="explode()";
$fonctions_utiles["array"][8]["url"]="http://fr2.php.net/manual/fr/function.implode.php";
$fonctions_utiles["array"][8]["nom"]="implode()";
$fonctions_utiles["array"][9]["url"]="http://fr2.php.net/manual/fr/function.str-split.php";
$fonctions_utiles["array"][9]["nom"]="str_split()";

// LES CHAINES


$questions_cours["string"][]="Quelles sont les différences entre la déclaration en simples quotes et doubles quotes ?";
$questions_cours["string"][]="Pourquoi faut-il échapper un anti-slash final ?";
$questions_cours["string"][]="Que permet le format Ymd ?";

$fonctions_utiles["string"][0]["nom"]="<b>LES CHAINES</b>";

$fonctions_utiles["string"][1]["nom"]="strlen()";
$fonctions_utiles["string"][1]["url"]="http://fr2.php.net/manual/fr/function.strlen.php";
$fonctions_utiles["string"][2]["nom"]="strtolower(),strtoupper(), ucfirst(),ucwords()";
$fonctions_utiles["string"][2]["url"]="http://fr2.php.net/manual/fr/function.strtolower.php";
$fonctions_utiles["string"][3]["nom"]="strcmp(),strcasemp";
$fonctions_utiles["string"][3]["url"]="http://fr2.php.net/manual/fr/function.strcmp.php";
$fonctions_utiles["string"][4]["nom"]="printf()";
$fonctions_utiles["string"][4]["url"]="http://fr2.php.net/manual/fr/function.printf.php";
$fonctions_utiles["string"][5]["nom"]="number_format()";
$fonctions_utiles["string"][5]["url"]="http://fr2.php.net/manual/fr/function.number-format.php";
$fonctions_utiles["string"][6]["nom"]="trim()";
$fonctions_utiles["string"][6]["url"]="http://fr2.php.net/manual/fr/function.trim.php";
$fonctions_utiles["string"][7]["nom"]="substr()";
$fonctions_utiles["string"][7]["url"]="http://fr2.php.net/manual/fr/function.substr.php";
$fonctions_utiles["string"][8]["nom"]="implode(),explode()";
$fonctions_utiles["string"][8]["url"]="http://fr2.php.net/manual/fr/function.explode.php";
$fonctions_utiles["string"][9]["nom"]="str_repeat()";
$fonctions_utiles["string"][9]["url"]="http://fr2.php.net/manual/fr/function.str-repeat.php";
$fonctions_utiles["string"][10]["nom"]="strpos(),strrpos(), stripos(),strripos()";
$fonctions_utiles["string"][10]["url"]="http://fr2.php.net/manual/fr/function.strpos.php";
$fonctions_utiles["string"][11]["nom"]="strstr(),stristr(), strchr()";
$fonctions_utiles["string"][11]["url"]="http://fr2.php.net/manual/fr/function.strstr.php";
$fonctions_utiles["string"][12]["nom"]="str_replace(),str_ireplace";
$fonctions_utiles["string"][12]["url"]="http://fr2.php.net/manual/fr/function.str-replace.php";
$fonctions_utiles["string"][13]["nom"]="strtr()";
$fonctions_utiles["string"][13]["url"]="http://fr2.php.net/manual/fr/function.strtr.php";
$fonctions_utiles["string"][14]["nom"]="ereg(),ereg_replace(), eregi(),eregi_replace()";
$fonctions_utiles["string"][14]["url"]="http://fr2.php.net/manual/fr/function.ereg.php";


$fonctions_utiles["string"][15]["nom"]="<br><b>LES DATES</b>";

$fonctions_utiles["string"][16]["nom"]="date()";
$fonctions_utiles["string"][16]["url"]="http://fr2.php.net/manual/fr/function.date.php";
$fonctions_utiles["string"][17]["nom"]="idate()";
$fonctions_utiles["string"][17]["url"]="http://fr2.php.net/manual/fr/function.idate.php";
$fonctions_utiles["string"][18]["nom"]="getdate()";
$fonctions_utiles["string"][18]["url"]="http://fr2.php.net/manual/fr/function.getdate.php";
$fonctions_utiles["string"][19]["nom"]="strftime()";
$fonctions_utiles["string"][19]["url"]="http://fr2.php.net/manual/fr/function.strftime.php";
$fonctions_utiles["string"][20]["nom"]="time()";
$fonctions_utiles["string"][20]["url"]="http://fr2.php.net/manual/fr/function.time.php";
$fonctions_utiles["string"][21]["nom"]="mktime()";
$fonctions_utiles["string"][21]["url"]="http://fr2.php.net/manual/fr/function.mktime.php";
$fonctions_utiles["string"][22]["nom"]="microtime()";
$fonctions_utiles["string"][22]["url"]="http://fr2.php.net/manual/fr/function.microtime.php";

//------------------------------------------------------------------------------------------




//config suite
$navigation["poo"]["titre"]="Structurer son programme";
$navigation["poo"]["titre_cours"]="La Structure";
$navigation["poo"]["fichier"]="lessons/ch3c1-poo-1.php";
$navigation["form"]["titre"]="Les Formulaires";
$navigation["form"]["titre_cours"]="Les Formulaires";
$navigation["form"]["fichier"]="lessons/ch3c2-form-1.php";
$navigation["bdd"]["titre"]="Interagir avec une Base de données";
$navigation["bdd"]["titre_cours"]="Bases de données";
$navigation["bdd"]["fichier"]="lessons/ch3c3-bdd-1.php";
$navigation["exemple"]["titre"]="Exemple complet";
$navigation["exemple"]["titre_cours"]="Exemple";
$navigation["exemple"]["fichier"]="lessons/ch3c4-exemple.php";

$navigationSCH["poo"][0]["titre"]="Déclaration";
$navigationSCH["poo"][0]["fichier"]="lessons/ch3c1-poo-1.php";
$navigationSCH["poo"][1]["titre"]="TODO-8";
$navigationSCH["poo"][1]["fichier"]="lessons/ch3c1-poo-2.php";
$navigationSCH["poo"][2]["titre"]="les portées de variables, constantes et paramètres";
$navigationSCH["poo"][2]["fichier"]="lessons/ch3c1-poo-3.php";
$navigationSCH["poo"][3]["titre"]="Récursivité et TODO-9";
$navigationSCH["poo"][3]["fichier"]="lessons/ch3c1-poo-4.php";
$navigationSCH["poo"][4]["titre"]="les Objets et TODO-10";
$navigationSCH["poo"][4]["fichier"]="lessons/ch3c1-poo-5.php";

$navigationSCH["form"][0]["titre"]="Traitement GET";
$navigationSCH["form"][0]["fichier"]="lessons/ch3c2-form-1.php";
$navigationSCH["form"][1]["titre"]="Formulaire POST";
$navigationSCH["form"][1]["fichier"]="lessons/ch3c2-form-2.php";


$navigationSCH["bdd"][0]["titre"]="Appel procédural";
$navigationSCH["bdd"][0]["fichier"]="lessons/ch3c3-bdd-1.php";
$navigationSCH["bdd"][1]["titre"]="Appel objet";
$navigationSCH["bdd"][1]["fichier"]="lessons/ch3c3-bdd-2.php";
$navigationSCH["bdd"][2]["titre"]="TODO-11";
$navigationSCH["bdd"][2]["fichier"]="lessons/ch3c3-bdd-3.php";

// LES OBJETS

$questions_cours["poo"][]="De quoi est composée la signature d'une fonction ?";
$questions_cours["poo"][]="Quelle est la différence entre un paramètre et une variable";
$questions_cours["poo"][]="Quelle est la portée d'un paramètre de fonction ?";
$questions_cours["poo"][]="Quelle est la portée d'une variable définie dans une fonction ?";
$questions_cours["poo"][]="Quelle est la différence entre un passage par valeur et un passage par référence ?";
$questions_cours["poo"][]="Quelle est la différence entre une variable globale et un passage par référence ?";
$questions_cours["poo"][]="Quelle est la portée d'une variable globale définie dans une fonction ?";
$questions_cours["poo"][]="Quelle est la portée d'une variable globale définie dans le programme principal ?";
$questions_cours["poo"][]="A quoi servent les fonctions ?";
$questions_cours["poo"][]="Combien peut-on passer de paramètres à une fonction ?";
$questions_cours["poo"][]="Quelle est la différence entre une variable et un attribut ?";
$questions_cours["poo"][]="Que permet un objet ?";
$questions_cours["poo"][]="Quelle est la différence entre un paramètre et un attribut ?";
$questions_cours["poo"][]="Que font les constructeurs ?";


$fonctions_utiles["poo"][1]["nom"]="func_num_args()";
$fonctions_utiles["poo"][1]["url"]="http://fr2.php.net/manual/fr/function.func-num-args.php";
$fonctions_utiles["poo"][2]["nom"]="func_get_args()";
$fonctions_utiles["poo"][2]["url"]="http://fr2.php.net/manual/fr/function.func-get-args.php";
$fonctions_utiles["poo"][3]["nom"]="func_get_arg()";
$fonctions_utiles["poo"][3]["url"]="http://fr2.php.net/manual/fr/function.func-get-arg.ph";
$fonctions_utiles["poo"][4]["nom"]="function_exists()";
$fonctions_utiles["poo"][4]["url"]="http://fr2.php.net/manual/fr/function.function-exists.php";

//Formulaires
$questions_cours["form"][]="Quelle est la différence entre une action en methode GET et une action en méthode POST ?";
$questions_cours["form"][]="Quelle est la différence entre l'attribut NAME et ID ?";
$questions_cours["form"][]="Quelle est la différence entre un champ hidden et un champ password ?";
$questions_cours["form"][]="Quelle est la différence entre l'attribut SIZE et MAXLENGHT ?";
$questions_cours["form"][]="A quoi sert l'attribut CHECKED?";
$questions_cours["form"][]="A quoi sert l'attribut SELECTED?";
$questions_cours["form"][]="A quoi sert l'attribut READONLY";
$questions_cours["form"][]="A quoi sert la balise Label?";
$questions_cours["form"][]="Comment doit-on nommer un champ qui permet de saisir plusieurs valeurs ?";

$fonctions_utiles["form"][1]["nom"]="htmlspecialchars()";
$fonctions_utiles["form"][1]["url"]="http://fr2.php.net/manual/fr/function.htmlspecialchars.php";

 
// BDD
$questions_cours["bdd"][]="Quelle est la nature du résultat retourné par mysql_query ?";
$questions_cours["bdd"][]="Quelle est la différence entre les deux types d'appel à MYSQLI ?";

$fonctions_utiles["bdd"][1]["nom"]="mysqli_connect()";
$fonctions_utiles["bdd"][1]["url"]="http://fr2.php.net/manual/fr/function.mysqli-connect.php";
$fonctions_utiles["bdd"][2]["nom"]="mysqli_close()";
$fonctions_utiles["bdd"][2]["url"]="http://fr2.php.net/manual/fr/mysqli.close.php";
$fonctions_utiles["bdd"][3]["nom"]="mysqli_query()";
$fonctions_utiles["bdd"][3]["url"]="http://fr2.php.net/manual/fr/mysqli.query.php";
$fonctions_utiles["bdd"][4]["nom"]="mysqli_fetch_assoc()";
$fonctions_utiles["bdd"][4]["url"]="http://fr2.php.net/manual/fr/function.mysql-fetch-assoc.php";
$fonctions_utiles["bdd"][5]["nom"]="mysqli_fetch_array()";
$fonctions_utiles["bdd"][5]["url"]="http://fr2.php.net/manual/fr/mysqli-result.fetch-array.php";
$fonctions_utiles["bdd"][6]["nom"]="mysqli_fetch_object()";
$fonctions_utiles["bdd"][6]["url"]="http://fr2.php.net/manual/fr/mysqli-result.fetch-object.php";
$fonctions_utiles["bdd"][7]["nom"]="mysqli_fetch_row()";
$fonctions_utiles["bdd"][7]["url"]="http://fr2.php.net/manual/fr/mysqli-result.fetch-row.php";
$fonctions_utiles["bdd"][8]["nom"]="mysqli_num_rows()";
$fonctions_utiles["bdd"][8]["url"]="http://fr2.php.net/manual/fr/mysqli-result.num-rows.php";
$fonctions_utiles["bdd"][9]["nom"]="mysqli_result()";
$fonctions_utiles["bdd"][9]["url"]="http://fr2.php.net/manual/fr/class.mysqli-result.php";
$fonctions_utiles["bdd"][10]["nom"]="mysqli_error()";
$fonctions_utiles["bdd"][10]["url"]="http://fr2.php.net/manual/fr/mysqli.error.php";



//-----------------------------------------------------------------------------------------


$correctionPath = "corrections";

// IMPORTANT !!!! ---------------------------------------------
//Fichier à créer et à modifier au besoin pour ECRASER et/ou compléter la config de base
include 'ma_config.inc';
// IMPORTANT !!!! ---------------------------------------------














?>
