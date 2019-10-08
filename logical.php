<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logical</title>
  </head>
  <body>
    <?php
    $a = 4;
    $b = 3;

    if ($a>$b) {
      echo "a is larger than b";
    } else if ($a<$b) {
      echo "a is not larger than b";
    } else {
      echo "a is equal to b";
    }
     ?>
     <br/>
     <?php //Only welcome new users
     $new_user=true;
       if ($new_user) {
         echo "<h1>Welcome!</h1>";
         echo "<p>We are glad you decided to join us.</p>";
       }
    ?>
    <br/>
    <?php
      $numerator = 20;
      $denominator = 4;
      $result =
      if ($denominator >0) {
        $result = $numerator / $denominator;
      }
      echo "Result: {$result}";
     ?>




  </body>
</html>
