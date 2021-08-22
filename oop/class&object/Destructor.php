<?php
class Destructor{
    private $name;

    public function __construct()
    {
        echo "Constructor Start";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo '<br>'."I am destructor Class Work done";
    }
}
$obj =new Destructor();
$obj->setName('Mg Mg');
echo $obj->getName();
