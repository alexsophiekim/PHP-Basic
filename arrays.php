<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php
        $numbers = array(4,8,15,16,23,42);
        echo $numbers[1];
      ?>

      <?php $mixed = array(6,"fox","dog",array("x","y","z")); ?><br/>
      <?php echo $mixed[2] ?><br/>
      <?php echo $mixed[3] ?><br/>
      <?php echo $mixed; ?><br/>
      <pre>
      <?php echo print_r($mixed); ?>
      </pre>
      <?php echo $mixed[3][1]; ?><br/>
      <?php $mixed[2] ="cat"; ?>
      <?php $mixed[4] = "mouse"; ?>
      <?php $mixed[] = "horse"; ?>
      <pre>
      <?php echo print_r($mixed); ?>
      </pre>

      <?php
      // Shorter way - new version PHP 5.4 
        $array = [1,2,3];
       ?>
  </body>
</html>
