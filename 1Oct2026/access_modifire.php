<?php 
class Myclass{
    //Poperties
    public $name;
    //private $name;  Can't access the object
    //protected $age; Can't access the object
    public $age;

    //Methode
    function welcome(){
        echo "Hello " . $this->name . "<br>" . "Age: " . $this->age . "<br>";
    }
}

//Declearing Objects using new
$obj1 = new Myclass;
$obj1->name = "Tania";
$obj1->age = 22;
$obj1->welcome();
?>