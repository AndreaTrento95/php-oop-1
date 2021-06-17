<?php 

// dichiaro la classe Movie
class Movie {

  //che ha le seguenti proprietà
  public $title;
  public $year;
  public $director;
  public $writer;
  public $cast;
  static $contatore = 0; // 0 come valore di default
  private $storyline;

  public function __construct($_title, $_year)
  {
    $this->title = $_title;
    $this->year = $_year;
    self::$contatore++; // incremento il contatore ogni volta che agggiungo un'istanza ad User
  }

  /////////////////////////
  //******  SETTERS ******/
  /////////////////////////
  
  // funzione che mi permette di avere accesso ad una proprietà private
  public function setStoryline($_storyline){
    $this->storyline = $_storyline;
  }

   /////////////////////////
   //******  GETTERS ******/
   /////////////////////////

  // funzione che mi permette di stampare il valore di una proprietà private
  public function getStoryline(){
    return $this->storyline;
  }

  // funzione che restituisce il titolo e l'(anno) del film
  public function getInfo(){ 
    return $this->title .' ('. $this->year . ')';
  }
}
