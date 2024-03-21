<?php

namespace src\Animal;

abstract class Animal
{
  protected $id;
  protected $type;
  protected $product;
  protected $product_count;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getProduct()
  {
    return $this->product;
  }

  public function getProductCount()
  {
    return $this->product_count;
  }

  abstract public function products();
}
