<?php

    use App\OOP\PHP\Employee;
    include 'PHP/Employee.php';

    require_once __DIR__ . '/vendor/autoload.php';

    $mohamed = new Employee('mohamed', 5.500, 28);
    echo $mohamed->getName() . "<br>";
    echo $mohamed->getSalary() . "<br>";
    echo $mohamed->getAge() . "<br>";
?>