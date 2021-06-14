<?php
require_once(dirname(__FILE__) . "/Mammal.php");

class Whale extends Mammal
{
  protected $finShape;

  public function __construct($weight, $size, $female, $finShape)
  {
    parent::__construct($weight, $size, $female);
    $this->finShape = $finShape;
  }

  public function getAllInfos()
  {
    echo ("- Baleine -") . PHP_EOL;
    echo ("Poids : " . $this->weight . "T") . PHP_EOL;
    echo ("Taille : " . $this->size . "m") . PHP_EOL;
    if ($this->female) {
      echo ("Femelle : oui") . PHP_EOL;
    } else {
      echo ("Femelle : non") . PHP_EOL;
    }
    echo ("Nageoire : " . $this->finShape) . PHP_EOL . PHP_EOL;
  }

  public function move()
  {
    echo "La baleine nage paisiblement" . PHP_EOL;
  }

  public function communicate()
  {
    echo "La baleine envoi un sonar" . PHP_EOL;
  }

  public function reproduce()
  {
    echo "La baleine se reproduit" .  PHP_EOL;
  }

  public function breastFeed()
  {
    if ($this->female) {
      echo "La baleine allaite ses petits" . PHP_EOL;
    } else {
      echo "La baleine n'est pas une femelle" . PHP_EOL;
    }
  }
}
