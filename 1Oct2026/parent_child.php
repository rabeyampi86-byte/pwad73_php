<?php 
class Myclass{
    //Poperties
    public $name;
    protected $age;

    function welcome(){
        echo "Hello " . $this->name . "<br>" . "Age: " . $this->age . "<br>";
    }
}

class Child_one extends Myclass {
    public $age = 30;
}
//Declearing Objects using new
$obj1 = new Myclass;
$obj1->name = "Tania";
$obj1->welcome();
?>