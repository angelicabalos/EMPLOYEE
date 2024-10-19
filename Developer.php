<?php
include_once("./Employee.php");
class Developer extends Employee {

    private $progLang;

    public function __construct($name, $salary, $programming) {

        // tawagain yung contructor ng parent class
        parent:: _constructor($name, $salary);

        // assign unique data to unique properties
        $this->progLang = $programming;
    }

    // display details in a formatted way | ipakita ng magandang format
    public function getEmployeeDetails()
    {
        return "Developer: ". $this->getName() . " Salary: " . $this->getSalary() . " Language: " . $this->progLang;
    }

}