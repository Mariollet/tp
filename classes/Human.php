<?php
require_once(dirname(__FILE__) . "/Mammal.php");

class Human extends Mammal
{
  protected $name;
  protected $lastName;

  public function __construct($weight, $size, $female, $name, $lastName)
  {
    parent::__construct($weight, $size, $female);
    $this->name = $name;
    $this->lastName = $lastName;
  }

  public function getAllInfos()
  {
    echo ("- Humain -") . PHP_EOL;
    echo ("Poids : " . $this->weight . "Kg") . PHP_EOL;
    echo ("Taille : " . $this->size . "m") . PHP_EOL;
    if ($this->female) {
      echo ("Femelle : oui") . PHP_EOL;
    } else {
      echo ("Femelle : non") . PHP_EOL;
    }
    echo ("Nom : " . $this->name) . PHP_EOL;
    echo ("Prenom : " . $this->lastName) . PHP_EOL . PHP_EOL;
  }

  public function move()
  {
    echo "L'humain se déplace avec c'est jambes" . PHP_EOL;
  }

  public function communicate()
  {
    echo "L'humain parle avec son voisin" . PHP_EOL;
  }
}
