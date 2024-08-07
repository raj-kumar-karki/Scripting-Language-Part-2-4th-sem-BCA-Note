
<?php
class Film {
  public $name;
  public $status;

  function __construct($name, $status) {
    $this->name = $name;
    $this->status = $status;
  }
  function __destruct() {
    echo "The film is {$this->name} and the status is {$this->status}.";
  }
}

$apple = new Film("KGF-2", "Super-hit");
?>