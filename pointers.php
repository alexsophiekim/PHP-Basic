<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pointers</title>
  </head>
  <body>
    <?php
      $ages = array(4,8,15,16,23,42);
      echo "1: ". current($ages). "<br/>";
      next($ages);
      echo "2: ". current($ages). "<br />";
      next($ages);
      next($ages);
      echo "3: ". current($ages). "<br />";

      prev($ages);
      echo "4: ". current($ages). "<br />";

      reset($ages);
      echo "5: " . current($ages). "<br />";

      end($ages);
      echo "6: " . current($ages). "<br />";

      next($ages);
      echo "7: ". current($ages). "<br />";
     ?>
     <br />
     <?php
      while ($ages = current($ages)) {
        echo $age . ", ";
        next($ages);
      }
      ?>
  </body>
</html>
