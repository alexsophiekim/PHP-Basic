<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions</title>
  </head>
  <body>
    <?php

      //Defining
      function say_hello() {
        echo "Hello World!<br/>";
      }
      say_hello();

      function say_hello_to($word) {
        echo "Hello {$word}!<br/>";
      }
      say_hello_to("World");
      say_hello_to("Everyone");


      //Arguments
      $name = "John Doe";
      say_hello_to($name);
    ?>
    <?php
      function better_hello($greeting, $target, $punct) {
        echo $greeting . " " . $target . $punct . "<br />";
      }

      // function better_hello($greeting, $target, $punct) {
      //   return $greeting . " " . $target . $punct . "<br />";
      // }
       echo better_hello("Hello", "Sophie Kim", "!");


      better_hello("Hello",$name, "!");
      better_hello("Hello",$name, "!!!");
      better_hello("Hello",$name, null);




     ?>


     <?php
      //Return Values

      function add($var1, $var2){
        $sum = $var1 + $var2;
        return $sum;
      }

      $result1 = add(3,4);
      $result2 = add(5, $result1);
      echo $result2;
      ?>
      <br />
      <?php
        function chinese_zodiac($year) {
          switch(($year - 4)%12){
            case 0: return  'Rat';
            case 1: return  'Ox';
            case 2: return  'Tiger';
            case 3: return  'Rabbit';
            case 4: return  'Dragon';
            case 5: return  'Snake';
            case 6: return  'Horse';
            case 7: return  'Goat';
            case 8: return  'Monkey';
            case 9: return  'Rooster';
            case 10: return 'Dog';
            case 11: return  'Pig';
          }
        }

        $zodiac = chinese_zodiac(2013);
        echo "2013 is the year of the {$zodiac}.<br/>";

        $zodiac = chinese_zodiac(2028);
        echo "2028 is the year of the {$zodiac}.<br/>";

        echo "2028 is the year of the ".  chinese_zodiac(2028) .".<br/>";
       ?>
       <br />

       <?php
        //Multipul returns

        function add_subt($var1, $var2) {
          $add = $var1 + $var2;
          $subt = $var1 - $var2;
          return array($add,$subt);  //only return one thing so I can use array
        }

        $result_array = add_subt(10,5);
        echo "Add : ". $result_array[0] . "<br />";
        echo "Subt : ". $result_array[1]. "<br />";
        // better way - list
        list($add_result, $subt_result) = add_subt(20,7);
        echo "Add : ". $add_result . "<br />";
        echo "Subt : ". $subt_result. "<br />";

       ?>
       <br / >

       <?php
        // Scope and global Variables

        $bar = "outside";  //global scope

        function foo($bar) {
          global $bar;  // allow to bring in globally scoped
          if (isset($bar)) {
            echo "foo: ". $bar . "<br />";
          }
          $bar = "inside" ;  //local scope
        }

        echo "1 ". $bar . "<br />";
        foo($bar);
        echo "2 " . $bar . "<br />";

       ?>
      <br/>
       <?php
        // Functions default argument Values

        function paint($room="office", $colour = "red") {
          return "The colour of the ${room} is {$colour}. <br />";
        }

        // echo paint("blue");
        echo paint("");
        echo paint("bedroom","blue");
        echo paint("bedroom", null);
        echo paint("bedroom");
        echo paint("blue");

       ?>



    <br />
  </body>
</html>
