<?php
namespace nasledovanie;

require_once '/home/ukki/www/obuchalovo/classes/Emploee.php';
use \classes\FileWriter\Emploee;

$employee = new Emploee;

$employee->setSalary(1000); // метод класса Employee
$employee->setName('john'); // метод унаследован от родителя
$employee->setAge(25); // метод унаследован от родителя

echo $employee->getSalary(); // метод класса Employee
echo $employee->getName(); // метод унаследован от родителя
echo $employee->getAge(); // метод унаследован от родителя

