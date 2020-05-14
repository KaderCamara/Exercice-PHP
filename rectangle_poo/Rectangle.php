<?php

//Un Rectangle est une Figure
//Un rectangle herite d'une Figure
//Rectangle est une classe Fille de Figure

  class Rectangle extends Figure{
     
           //Attributs Instances
            private $largeur;
            private $longueur;  
          //Attributs classe ou Attributs static
            private static $unite;
            //Constructeur => methode instance concrete
              public  function __construct($longueur=null,$largeur=null){

                        if($largeur!=null){
                          $this->largeur=$largeur;
                        }

                        if($longueur!=null){
                          $this->longueur=$longueur;
                        }
              }
               
              //Getters  methodes instances concretes
           
              public function getLargeur(){
                return $this->largeur;
             }
             public function getLongueur(){
              return $this->longueur;
             }
             //setters  methodes instances concretes
              public function setLargeur($largeur){
                 $this->largeur=$largeur;
              }
              public function setLongueur($longueur){
                $this->longueur=$longueur;
              }
             
              //Getters Setters  methodes static concretes
              public static function getUnite(){
                return self::$unite;
              }
              public static function setUnite($unite){
                self::$unite=$unite;
              }

              //metiers=>UC
              //Redefinition
                public function demiPerimetre(){
                     return $this->longueur + $this->largeur;
                }
                
                public function surface(){
                  return $this->longueur * $this->largeur;
                }
                public function diagonale(){
                  return sqrt(pow($this->longueur,2)+pow($this->largeur,2));
                }

                public function perimetre(){
                  return $this->demiPerimetre($this->longueur,$this->largeur)*2;

                }
              
  }
/*
  //Access Classe  ::
  //Objet          ->
Rectangle::setUnite("m");

  //Objets
  $rect1=new Rectangle();
  //$rect1.longueur => erreur encapsulation
  //Setters
  $rect1->setLongueur(1200000);
  $rect1->setLargeur(120000);
  //Getters
 echo "Longueur ".  $rect1->getLongueur()."" .$rect1->getUnite()."  <br>";
 echo "Largeur ". $rect1->getLargeur()."" .$rect1->getUnite()."<br>";


  $rect2=new Rectangle();
 //Setters
 $rect2->setLongueur(1200002);
 $rect2->setLargeur(120002);
 //Getters
echo "Longueur".  $rect2->getLongueur()."" .$rect2->getUnite(). "<br>";
echo "Largeur". $rect2->getLargeur()."" .$rect2->getUnite()."<br>";
*/

?>