<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach Loops</title>
  </head>
  <body>
    <?php
      $ages = array(4,8,15,16,23,42);

      foreach ($ages as $age) {
        echo "Age: {$age}<br />";
      }
     ?>
     <br />
     <?php
       $person = array(
                  "first_name" => "Sophie",
                  "last_name" => "Kim",
                  "address" => "Wellington",
                  "city" => "Paraparaumu",
                  "post" => "5032"
                );

       foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace ("-", " ", $attribute));
        echo "{$attr_nice}: {$data}<br />";
       }
    ?>
    <br />
    
  </body>
</html>
