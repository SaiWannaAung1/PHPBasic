<?php

class SoftwareEngineer{
    public $name;
    public $gender;
    public $age;

    public function __construct($name, $gender, $age)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function softwareEngineering(){
        echo "I am Software Engineer <br>";
        echo "$this->name <br>";
        echo "$this->gender <br>";
        echo "$this->age <br>";
    }
}
$engineer = new SoftwareEngineer("Aung Aung", "male",24);
$engineer->softwareEngineering();