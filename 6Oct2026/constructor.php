<?php
class Fruit {
  public $name;
  public $color;

  //function __construct($name, $color) {
  function __construct() {
    // $this->name = $name;
    // $this->color = $color;
    echo "This is constructor.";
  }

  function get_details() {
    echo "Name: " . $this->name . "<br>" . "Color: " . $this->color .".<br>";
  }
}

$apple = new Fruit();
//$apple->get_details();
// echo "<pre>";
// var_dump($apple);

// $banana = new Fruit('Banana', 'Yellow');
// $banana->get_details();
?>