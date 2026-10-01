<?php
class Employee
{
private $name;
private $title;
// Getter function
public function getName() {
return $this->name;
}
//Setter function
public function setName($name) {
$this->name = $name;
}
public function sayHello() {
echo "Hi, my name is {$this->getName()}.";
}
}
//End of class

$emp = new Employee;
$emp->setName("Tania ");
echo $emp->getName();
//echo "<pre>";
//var_dump($emp);
$emp->sayHello();
?>