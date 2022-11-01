<?php

class Car{
 
public $publicModelName;
private $privetModelName = "Mercedes";
public function getPublicModelFun(){
    return "The public car model is " . $this->publicModelName;
}

public function getPrivetModelFun(){
    return "The privet car model is " . $this->privetModelName;
}

}
// we are trying to get access property from outside the class
// $car = new Car;
// $car->publicModelName = "Mercedes";
// echo $car->getPublicModelFun();
// finaly we got result The public car model is Mercedes;


// we are trying to get access property from outside the class
// $car = new Car;
// $car->privetModelName = "Mercedes";
// echo $car->getPrivetModelFun();
// Fatal error: Uncaught Error: Cannot access private property Car::$privetModelName in C:\laragon\www\LEARN PHP\OOP\Access-modifiers--public-vs.-private\index.php:25 Stack trace: #0 {main} thrown in C:\laragon\www\LEARN PHP\OOP\Access-modifiers--public-vs.-private\index.php on line 25
// bcz we can't access in a class proivet property . it's a class privet property.



// now we are trying to access in  class not outsite class


$car = new Car;
echo $car->getPrivetModelFun();
// finally we got result from class privet property
?>