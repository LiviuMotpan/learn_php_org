<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  class Person {
    public function __construct($first_name, $last_name) {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
    }

    public function full_name() {
      echo "My name is " . $this->first_name . " " .  $this->last_name . ".\n";
    }
  }

  $liviu = new Student("Liviu", "Motpan");
  $libiu->full_name();

  ?>
</body>
</html>