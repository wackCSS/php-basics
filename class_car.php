
<?php

class Car {
    
    var $wheels = 4;
    var $bonnet = 1;
    var $doors = 4;

    function moveWheels() {
        echo 'wheels now moving';

        // $this->wheels = 3;
    }

}

$ford = new Car();
$toyota = new Car();

// use -> to access object methods
$ford->moveWheels();
echo '<br />' . $ford->wheels;


// $ford->wheels = 3;


?>