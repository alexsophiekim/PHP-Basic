<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Break</title>
  </head>
  <body>
    <?php
      for ($count=0; $count <=10 ; $count++) {
        if ($count == 5) {
          break;
        }
        echo $count . ", ";
      }
     ?>
     <br />
     <?php
       for ($i=0; $i <= 5 ; $i++) {
         if ($i % 2 == 0 ) { continue(1);}
         for ($j=0; $j <=5 ; $j++) {
           if ($j ==3) { break(2); }
           echo $i . "-" . $j . "<br />";
         }
       }
      ?>
  </body>
</html>
