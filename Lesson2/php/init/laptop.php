<?php

class Laptop {
  public $model;
  public $color;
  public $brand;
  public $price;
  
  public function __construct($model, $color, $brand, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->brand = $brand;
    $this->price = $price;
  }
}


class AsusG513 extends Laptop  {
    public function getImage()
    {
       echo "image";
    }
}
