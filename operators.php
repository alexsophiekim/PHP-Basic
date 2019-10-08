<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Operators</title>
  </head>
  <body>
    <?php
      $a = 4;
      $b = 3;
      $c = 1;
      $d = 20;
      if (($a > $b) || ($c > $d)) {
        echo "a is larger than b OR ";
        echo "c is larger than d";
      }
     ?>
     <?php
     $e = 100;
     if (!isset($e)) {
      $e = 200;
     }
     echo $e;
      ?>
      <br/>
    <?php
      $quantity = "";
      if (empty($quantity) && !is_numeric($quantity)) {
        echo "You must enter a quantity.";
      }
     ?>
  </body>
</html>
