<?php

/**
 * Une class permet d'instancer des conteneurs nommés objets possédant 
 * des caractéristiques : les attributs
 * et des actions : les méthodes
 * afin de les utiliser dans le programme principal
 */

class pizza {
    
/* ----------------------------------------------------------------------
 * étape 1 : on déclare les attributs et leur portée
 * ----------------------------------------------------------------------
 */
    
    /*
     * les attributs d'une classe sont par usage toujours privés, 
     * car il seront accessibles par les getters/setters
     * 
     * Voici comment est définie l'accessibilité aux composants de la super-classe, en fonction des modificateurs :
            Mot-clé  Accès
            public  Oui
            "rien"  Oui, seulement si la classe fille se trouve dans le même package que la super-classe.
            protected  Oui, quel que soit le package de définition de la classe fille.
            private  Non.
     * 
     * EN PHP la convention veut que le nom des attributs commence toujours pas un underscore
     * Il est possible d'attribuer des valeurs par défaut pour initialiser les attributs lors de leur déclaration
     */
    private $_nom = "Classique";
    private $_prix = 12.50;
    private $_diametre = 15;
    private $_base = "tomates";
    private $_listeIngredients = "";

    
 /* ----------------------------------------------------------------------
 * étape 2 : en premier lieu on retrouve toujours le constructeur
 * ----------------------------------------------------------------------
 */
    
    /**
     * Ceci est le constructeur de la classe : il initialise les valeurs des attributs 
     * Les valeurs des attributs sont initialisées en fonction des paramètres reçus
     * @param nom la chaine pour initialiser l'attribut nom
     * @param prenom la chaine pour initialiser l'attribut prenom
     * 
     * En PHP il n'est pas possible de surcharger les constructeurs 
     * c'est pourquoi il est possible d'attribuer des valeurs par défaut lors de la déclaration des paramètres
     * 
     * En PHP le constructeur ne porte pas le nom de la classe comme dans les autres langages
     * le constructeur a toujours une portée publique sinon la classe est inutilisable dans le programme principal
     */
  
    public function __construct($nom="Regina",$prix=12.5,$diam,$base,$listeIng){
         /*
         * ici les paramètres de la méthode (qui ont une portée locale)
         * ont le même nom que les attributs de la classe (ayant une portée de classe)
         * on doit donc préfixer les attributs de la classe par le mot clé "this"
         * "this" permet d'accéder aux éléments de la classe à n'importe quel endroit de celle-ci
         * il n'est pas possible de confondre une variable locale (ou paramètre de méthode)
         * avec un attribut de la classe grâce à la coloration syntaxique (vert par défaut sous netbeans)
         */
        $this->_nom = $nom;
        $this->_prix = $prix;
        $this->_diametre = $diam;
        $this->_base = $base;
        $this->_listeIngredients = $listeIng;
    }

 /* ----------------------------------------------------------------------
 * étape 3 : viennent ensuite les méthodes publiques
 * ----------------------------------------------------------------------
 */
    
    /*
     * fonction qui renvoie la chaine en HTML  
     * correspondant à la description de la pizza sur la carte 
     */
    public function getLigneMenu(){
        
        return "<b>Pizza ".$this->_nom."</b> en ".$this->_diametre."cm  : ".$this->_prix."€<br>".
        $this->colorBase()." + ". $this->_listeIngredients;
    }
    
/* ----------------------------------------------------------------------
 * étape 4 : puis les méthodes protected et privées
 * ----------------------------------------------------------------------
 */
    
    /*
     * fonction qui renvoie le code HTML permettant d'afficher
     * la base de la pizza avec la couleur correspondante
     */
    private function colorBase(){
        $base = "base ".$this->_base;
        if (strpos($this->_base,"tomate")!==FALSE){
            return $this->surroundColor("#FF0000", $base);
        }else if (strpos($this->_base,"creme")!==FALSE){
            return $this->surroundColor("#DDDD00", $base);
        }else{
            return $base;
        }
    }
    
    /*
     * fonction qui renvoie le code HTML permettant 
     * d'entourer le contenu reçu en paramètre avec les balises HTML
     * span avec un style précisant la couleur passée en paramètre
     * @param $color code couleur en Hexa
     * @param $content contenu à colorer
     */
    private function surroundColor($color,$content){
        $start='<span style="color:'.$color.'">';
        $end = "</span>";
        return $start.$content.$end;
    }
    
      
/* ----------------------------------------------------------------------
 * étape 6 : enfin se trouvent les getters et les setters
 * ----------------------------------------------------------------------
 */
    
/*
 * les getters et setters sont souvent rangés en toute fin de la classe
 * En effet, grâce aux conventions de nommage
 * et à l'autocomplétion, le programmeur sait intuitivement s'en servir et a rarement besoin de lire ce code
 * il n'y a généralement pas de Jdoc associée aux getters et setters sauf comportement particulier souhaité
 */
    
    public function getNom(){
        return $this->_nom;
    }
    
    public function getPrix(){
        return $this->_prix;
    }
    
    public function getDiametre(){
        return $this->_diametre;
    }
    
    public function getbase(){
        return $this->_base;
    }
    
    public function getListeIngredients(){
        return $this->_listeIngredients;
    }
    
    public function setNom($nom){
        $this->_nom = $nom;
    }
    
    public function setPrix($prix){
        $this->_prix = $prix;
    }
    
    public function setBase($base){
        $this->_base = $base;
    }
    
    public function setListeIngredients($liste){
        $this->_listeIngredients = $liste;
    }
}
?>
