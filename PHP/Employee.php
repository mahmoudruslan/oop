<?php
    namespace App;

    class Employee {
        private string $name;
        private float $salary;
        private int $age;

        public function __construct(string $name, float $salary, int $age)
        {
            $this->name = $name;
            $this->salary = $salary;
            $this->age = $age;
        }

        public function getName()
        {
            return $this->name;
        }
        //TEST
        public function getSalary()
        {
            return $this->salary;
        }
        //test
        public function getAge()
        {
            return $this->age;
        }

    }
?>