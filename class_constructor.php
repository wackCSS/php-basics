
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

function __construct() {
    // this will fire every time the class is instantiated
    // use it to set stuff up before the class is run, i.e. database call.
    echo $this->wheels = 15;
}

$jet = new Plane();

echo $jet->wheels;
echo $jet->moveWheels();
?>