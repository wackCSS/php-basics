
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

class Plane extends Car{
    var $wheels = 8;
}

$jet = new Plane();


echo $jet->wheels;
echo $jet->moveWheels();
?>