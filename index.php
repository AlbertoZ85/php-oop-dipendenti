<?php
require_once 'classes/Employee.php';
require_once 'classes/Position.php';

// $employee1 = new Employee('Alberto', 'Zordan', 524510);
// var_dump($employee1);

$employee2 = new Position('A', 'Z', 103386, 'CEO');
$employee2->daysFromHiring('01-01-2020');
var_dump($employee2);