
<?php

class Car {
    
    static $wheels = 4;

    function moveWheels() {
        echo Car::$wheels . ' wheels now moving';
    }

}

$ford = new Car();

// Use ClassName::$foo to get static property of class
// this is not available on an instance, only the class itself.
echo Car::$wheels;
?>