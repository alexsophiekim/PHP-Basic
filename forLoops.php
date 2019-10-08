<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>For Loops</title>
  </head>
  <body>
    <?php // while loop
      $count = 0;
      while ($count <=10) {
        echo $count . ", ";
        $count++;
      }
     ?>
     <br/>
     <?php
     for ($count=0; $count <= 10; $count++) {
       echo $count . ", ";
     }
     ?>
     <br/>
     <?php
     for ($count =20; $count > 0; $count--) {
        if ($count % 2 == 0) {
          echo "{$count} is even.<br/>";
        } else {
          echo "{$count} is odd.<br/>";
        }
     }
      ?>
  </body>
</html>
