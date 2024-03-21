<?php

namespace src\Animal;

use src\Animal\Animal;

class Cow extends Animal
{
  protected $type = "Cow";
  protected $product = "Молоко";

  public function products()
  {
    $this->product_count[] = rand(8, 12);
  }
}
