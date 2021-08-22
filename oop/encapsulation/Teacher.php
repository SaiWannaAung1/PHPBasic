<?php


class Teacher
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }


}
$teacher = new Teacher();
$teacher -> setName('Mg Mg');
echo $teacher -> getName();
