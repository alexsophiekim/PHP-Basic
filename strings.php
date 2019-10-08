<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strings</title>
  </head>
  <body>
    <?php
        echo 'Hello World<br/>';
        echo "Hello World<br/>";

        $greeting = "Hello";
        $target = "World";
        $phrase = $greeting . " " . $target;
        echo $phrase;
     ?>
     <br />
     <?php
        echo "$phrase Again<br/>";
        echo '$phrase Again<br/>';
        echo "{$phrase}Again<br />";
      ?>
  </body>
</html>
