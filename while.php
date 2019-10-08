<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While Loops</title>
  </head>
  <body>
    <?php
        $count =0;
        while($count <= 10) {
          if ($count == 5) {
            echo 'FIVE, ';
          } else {
            echo $count . ", ";
          }
          $count++;
        }
        echo "<br/>";
        echo "Count: {$count}";
     ?>
     <br/>
     <?php



     ?>

  </body>
</html>
