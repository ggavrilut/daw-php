<?php

class Vehicle extends ClasaParinte {
  
    private $color;
    public $brand;
    protected $nrDoors;

    static public $type = 'Vehicle';

    public function getColor() {
        if (self::$type == 'Vechile') {
            return $this->color;
        }
        return false;
    }

    public function __constructor($color) {
        self::__constructor();
        $this->color = $color;
    }

}

$myCar = new Vehicle();
$myCar->brand = 'test';
$myCar->getColor();
Vehicle::$type;

?>