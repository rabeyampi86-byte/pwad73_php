<?php
class Goodbye {
  const MESSAGE = "Thank you for visiting W3Schools.com!";
}
// $abc = new Goodbye;
// echo $abc::MESSAGE;
//::Scope Resulation Operator
echo Goodbye::MESSAGE; // Access constant
?>
<br>
<?php
class Goodbye1 {
  const MESSAGE = "Thank you for visiting W3Schools.com!";

  public function bye() {
    echo self::MESSAGE; // Access constant
  }
}

$goodbye = new Goodbye1();
$goodbye->bye();
?>