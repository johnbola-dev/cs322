<?php

class Laptop
{
    public $brand;
    public $model;
    public $price;

    public function setbrand($brand)
    {
        $this->brand = $brand;
    }
    public function getbrand()
    {
        return $this->brand;
    }

    public function setmodel($model)
    {
        $this->model = $model;
    }
    public function getmodel()
    {
        return $this->model;
    }

    public function setprice($price)
    {
        $this->price = $price;
    }
    public function getprice()
    {
        return $this->price;
    }
}
// PRODUCT
$rogstrixg15 = new Laptop();
$rogstrixg15->setbrand('ASUS');
$rogstrixg15->setmodel('G15 G513QR-HF343W');
$rogstrixg15->setprice('101,195.00');


$acerPred = new Laptop();
$acerPred->setbrand('ACER');
$acerPred->setmodel('PREDATOR 15"');
$acerPred->setprice('99,999.00');


?>