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

    $cars = [
      "BMW" => "1916",
      "Tesla" => "2003",
      "Ferrari" => "1947",
      "Lamborghini" => "1963",
      "Toyota" => "1937"
    ];

    foreach($cars as $name => $year) {
      echo "Car : {$name} , Year : {$year} \n\n";
    }

  ?>
</body>
</html>