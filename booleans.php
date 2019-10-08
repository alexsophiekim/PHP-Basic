<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booleans</title>
  </head>
  <body>
    <?php
      $result1 = true;
      $result2 = false;


     ?>

     Result1: <?php echo $result1; ?><br/>
     Result2: <?php echo $result2; ?><br/>

     result2 is boolean? <?php echo is_bool($result2); ?><br/>
     <br/>
     <?php
        $number  = 3.14;
        if (is_float($number)) {
          echo "It is a float.";
        }
      ?>


  </body>
</html>
