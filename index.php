<?php
 require_once __DIR__ . '/vendor/autoload.php';

use classes\Student;
use classes\Car;
use classes\Tv;

 $student = new Student('Ivan', 'Ivanov', 25, 'History');
 echo $student->getStudentInfo();

 $car = new Car('BMW', 'Black', 2022, 180);
 echo $car->getCarInfo();

 $tv = new Tv('LG', 'LED', 'white', 2020);
 echo $tv->getTvInfo();