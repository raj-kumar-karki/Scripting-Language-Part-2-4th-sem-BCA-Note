

<?php        //.Write a php program with suitable example of inheritance.

class Food {
  public $name;
  public $price;
  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }
  public function intro() {
  	echo "<br>";
  	
    echo "The food is {$this->name} and the price is {$this->price}.";
  }
}

// Strawberry is inherited from Fruit
class Momo extends Food {
  public function message() {

    echo "Am I a food or momo? ";
  }
}
$momo= new Momo("Momo", "125");
$momo->message();
$momo->intro();
?>
