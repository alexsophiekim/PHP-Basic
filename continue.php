<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Continue</title>
  </head>
  <body>
    <?php

      for ($count=0; $count <= 10 ; $count++) {
        if ($count % 2 === 0) {continue;}
        echo $count . ", ";
      }
     ?>
     <?php
      $count = 0;
      while ($count <= 10) {
        if ($count == 5) {
          $count++;
          continue;
        }
        echo $count . ", ";
        $count++;
      }
      ?>
      <br />
      <?php
        for ($i=0; $i <= 5 ; $i++) {
          if ($i % 2 == 0 ) { continue(1);}
          for ($j=0; $j <=5 ; $j++) {
            if ($j ==3) { continue(2); }
            echo $i . "-" . $j . "<br />";
          }
        }
       ?>
  </body>
</html>
