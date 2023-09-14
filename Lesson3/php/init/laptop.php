<?php

class Laptop {
  public $model;
  public $color;
  public $brand;
  public $price;
  public $imgLink;


  public function __construct($model, $color, $brand, $price, $imgLink) {
    $this->model = $model;
    $this->color = $color;
    $this->brand = $brand;
    $this->price = $price;
    $this->imgLink = $imgLink;
  }
}


class AsusG513 extends Laptop  {
    public function getImage()
    {
       echo "image";
    }
}
