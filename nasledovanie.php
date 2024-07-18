<?php
namespace nasledovanie;

require_once '/home/ukki/www/obuchalovo/classes/Driver.php';
use \classes\FileWriter\Driver;

$employee = new Driver;

$employee->setSalary(1000); // метод класса Employee
$employee->setName('john'); // метод унаследован от родителя
$employee->setAge(25); // метод унаследован от родителя
$employee->setStage('G');

echo $employee->getSalary(); // метод класса Employee
echo "\n";
echo $employee->getName(); // метод унаследован от родителя
echo "\n";
echo $employee->getAge(); // метод унаследован от родителя
echo "\n";
echo $employee->getStage();
