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
  abstract public function reproduce();
  abstract public function breastFeed();
}
