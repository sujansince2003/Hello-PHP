<?php

class Car{
    private $brand;
    private $model;
    private $color="red";
    public function __construct($brand,$model)
{
        $this->brand=$brand;
        $this->model=$model;

    }

    public function getCarinfo(){
        return "brand is " . $this->brand  ." and model is". $this->model;
    }
}

$car01= new Car("tesla","3");
$car02= new Car("bmw","xx");
echo $car01->getCarinfo();
echo $car02->getCarinfo();

?>