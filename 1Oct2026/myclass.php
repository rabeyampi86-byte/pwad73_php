<?php 
class Myclass{
    //Poperties
    public $name;
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

//echo "<pre>";
//var_dump($obj1);
$obj2 = new Myclass;
$obj2->name = "Mou";
$obj2->age = 23;
$obj2->welcome();
//var_dump($obj2);
$obj3 = new Myclass;
$obj3->name = "Nijum";
$obj3->age = 22;
$obj3->welcome();
//var_dump($obj3);

?>