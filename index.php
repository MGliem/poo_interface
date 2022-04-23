<?php

require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

// $myBike = new Bicycle('red', 1);
// $mySkateboard = new Skateboard('blue', 1);
// $myCar = new Car('grey', 4, 'gas');

// $motorWay = new MotorWay();
// $pedestrianWay = new PedestrianWay();
// $residentialWay = new ResidentialWay();

// $motorWay->addVehicle($myCar);
// echo 'MotorWay + Car' . PHP_EOL;
// varDumpCurrentVehicles($motorWay);

// $motorWay->addVehicle($myBike);
// echo 'MotorWay + Bike?' . PHP_EOL;
// varDumpCurrentVehicles($motorWay);


// function varDumpCurrentVehicles(object $way): void
// {
//     foreach ($way->getCurrentVehicles() as $vehicle) {
//         var_dump($vehicle) . PHP_EOL;
//     }
// }

$car = new Car('blue', 4, 'fuel');

try {
    $car->start();
} catch (Exception $e) {
    if ($e->getMessage() === 'handbrake') {
        $car->setHasParkBake(false);
    }
} finally {
    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}


if ($car->getHasParkBake()) {
    echo 'don\'t forget your handbrake';
} else {
    echo 'let\'s go!';
}
