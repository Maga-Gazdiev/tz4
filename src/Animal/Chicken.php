<?php

namespace src\Animal;

use src\Animal\Animal;

class Chicken extends Animal
{
  protected $type = "Chicken";
  protected $product = "Яйца";

  public function products()
  {
    $this->product_count[] = rand(0, 1);
  }
}
