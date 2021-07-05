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

    $arr = [
      ["BMW","AUDI","TOYOTA"],
      [1,2,3],
      [5,6,9]
    ];

    for ($i=0; $i < count($arr); $i++) { 
      echo "\n\n{$i} row : ";
      for ($j=0; $j < count($arr[$i]); $j++) { 
        echo $arr[$i][$j]."    ,";
      }
    }



  ?>
</body>
</html>