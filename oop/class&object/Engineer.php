<?php

class Engineer
{
    public $name;
    public $gender;
    public $position;
    public $age;

    public function Engineering(){
        echo "I am Engineer <br>";
        echo "$this->name <br>";
        echo "$this->gender <br>";
        echo "$this->position <br>";
        echo "$this->age <br>";
    }
}

$engineer = new Engineer();
$engineer->name = "Daw Maw";
$engineer->gender = "Female";
$engineer->position = "Senior Engineer";
$engineer->age = 45;
$engineer->Engineering();
