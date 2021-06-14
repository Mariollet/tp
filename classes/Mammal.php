<?php
abstract class Mammal
{
  protected $weight;
  protected $size;
  protected $female;

  public function __construct($weight, $size, $female)
  {
    $this->weight = $weight;
    $this->size = $size;
    $this->female = $female;
  }

  // Getter
  abstract public function getAllInfos();

  // Methodes
  abstract public function move();
  abstract public function communicate();
  
  public function reproduce() {
    echo "Se reproduit" .  PHP_EOL;
  }
  public function breastFeed()   {
    if ($this->female) {
      echo "Allaite ses petits" . PHP_EOL;
    } else {
      echo "N'est pas une femelle" . PHP_EOL;
    }
  }
}
