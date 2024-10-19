<?php
include_once("./Employee.php");
class Manager extends Employee {

    private $dept;
    public function __construct($name, $salary, $department) {

        // tawagain yung contructor ng parent class
        parent:: _constructor($name, $salary);

        // assign unique data to unique properties
        $this->dept = $department;
    }

    // display details in a formatted way | ipakita ng magandang format
    public function getEmployeeDetails()
    {
        return "Manager ". $this->getName() . " Salary: " . $this->getSalary() . " Department: " . $this->dept;
    }

}