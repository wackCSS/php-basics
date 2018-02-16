
<?php

class Car {
    
    // like using var. available everywhere
    public $wheels = 4;
    // available to this class and any sub-classes
    protected $bonnet = 1;
    // only available to this class
    private $doors = 4;

    function moveWheels() {
        echo 'wheels now moving';

        // $this->wheels = 3;
    }

    function showDoors() {
        echo $this->doors;
    }
}

class Truck extends Car {
    function showProperty() {
        echo $this->bonnet;
    }

    function showDoors() {
        echo $this->doors;
    }
}

$bmw = new Car();
$scania = new Truck();

echo $bmw->wheels . '<br>';
echo $scania->showProperty() . '<br>';
echo $scania->showDoors();
echo $bmw->showDoors();
?>