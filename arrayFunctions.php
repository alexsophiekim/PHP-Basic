<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Functions</title>
  </head>
  <body>
    <?php $numbers = array(8,23,15,42,16,4); ?>

    Count: <?php echo count($numbers); ?><br/>
    Max value: <?php echo max($numbers); ?><br/>
    Min value: <?php echo min($numbers); ?><br/>
    <br/>
    <pre>
      Sort: <?php echo sort($numbers); print_r($numbers);?><br/>
      Reverse sort: <?php echo rsort($numbers); print_r($numbers); ?><br/>
    </pre>
    <br/>
    Implode: <?php  echo $num_string = implode("*", $numbers); ?><br/>
    Explode: <?php  print_r(explode("*", $num_string));?><br/>
    <br/>
    15 in array? : <?php echo in_array(15,$numbers); ?><br/>
    19 in array? : <?php echo in_array(19,$numbers); ?><br/>


  </body>
</html>
