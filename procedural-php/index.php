<?php
include_once 'header.php';

?>
  <hr>
<main>
  <section>
  <?php
            echo"My first PHP Script with double quote";
            echo "<br>";
            echo'My first PHP Script with single quote';
        ?>
    <h2>React Section</h2>
    <div id="mydiv"></div>
  </section>

  <hr>

    <section>
        <h2>What is PHP?</h2>
        <ul>
            <li>Php is an acronym for Hypertext Preprocessor</li>
            <li>It is widely used and an open source scripting language</li>
            <li>Php scripts are executed on the server</li>
            <li>Php is free to download and use</li>
            <li>It is a powerful scripting language that it is used by the biggest blogging system on the web - WordPress!</li>
    
        </ul>

        <hr>
        <h2>Two Types of programming pardign that you will encounter</h2>
        <ol>
            <li>Procedural Programming</li>
            <li>Objcet Oriented Progamming</li>
        </ol>
        <hr>
        <h2>What can PHP do?</h2>
        
            <li>It can generate dynamic page content</li>
            <li>It can create,open,read,write,delete and close files on the server </li>
            <li>It can receive and send cookies</li>
            <li>Can perfrom CRUD - CREATE READ UPDATE & DELETE in out database</li>
            <li>Setup control user-access</li>
            <li>Encrypt data</li>
    </section>
<hr>
<br>
 <section>
    <h2>Two basic ways to get output</h2>
    <ul>
        <li>echo statement</li>
        <li>print statement</li>
    </ul>
    <p>
        Hi, this is a paragraph content inside a paragraph element.
    </p>
    <?php
    echo"Hello World, I'm, Aldrien.";
    echo"<br>";
    echo"This is also a paragraph inside the php tag";
    echo"<br>";
    echo"<br>";
    echo"<p>This is another <b> paragraph </b> that got displayed inside php tags.</p>";
    ?>

    <?php
    echo "Print statement can be used with or without () parenthesis <br>";

    print "hello world! <br>";
    print "This is an example of print statement to display output on the browser.";



    ?>


 </section>
<hr>
<section>
    <!--+++++++++++++ ESCAPING +++++++++++++ -->
    <h2>Without Escaping</h2>
    <?php // This is example of without escaping
    if(1==1){
        echo"<p> This works alright with an if statement.</p>";
    }
    ?>

    <h2>With Escaping</h2>
    <?php 
    /* this is an example of
    multi line 
    comments in
    PHP */

        //if(1==2){ // not equal to 1
            if(1==1){
    ?>
            <p>This should also work with the implement of the concept of excaping in PHP.</p>

        <?php 
    }
    ?>
</section>
<hr>
<br>
<section>
    <h2>Scalar data types</h2>
    <br>
    <strong>DATA TYPES</strong>
    
    <h3>PRIMITIVE DATA TYPES</h3>

    <strong>NOTE:</strong><p>We have at least 12 PRIMITIVE DATA TYPES</p>
    <h3>Scalar</h3>
    <ul>
        <li>STRING</li>
        <li>INTEGERS</li>
        <li>FLOATS</li>
        <li>BOOLEAN</li>
    </ul>


    <h3>Compound</h3>
    <ul>
        <li>Array</li>
        <li>Object</li>
        <li>Callable</li>
        <li>Iterable</li>
    </ul>

    <h3>Special</h3>
    <ul>
        <li>Resource</li>
        <li>NULL</li>
    </ul>

    <h2>Pseudo Types</h2>

</section>

<section>
    <h2>String Data types</h2>
    <ul>
        <li>Single quotes</li>
        <li>Double quotes</li>
    </ul>
    <p>It is important to take note of cancelling out double quotes in side of our double quotes</p>
    
    <?php
    //INCORRECT 
    //echo'I'm leaning';
    echo "I'm learning how to work with strings in PHP!!! This is printed out with double quotes";
    echo"<br>";
    echo 'I\'m learning how to work with strings in PHP!!! This is printed out with single quotes plus with escape character';
    ?>

    <hr>
    <h2>Integers Data Type</h2>
    <?php
        echo 20 . " This is an integer data types."; // integer data types
        echo "<br>";
        echo "20" . " This is an string data types."; // string data types

        echo "<br>";
        echo "<br>";
        echo "<p>'10' is not equal to 10 in php</p>";
        if("10" !== 10){
            echo"This is not the same data types";
        }
    ?>


    <h2>Float Data Types</h2>
    <?php 
        echo 24.5; 
        echo "<br>";
        echo 10.35;
        echo "<br>";
        echo 1000.12345;
        echo "<br>";


        //PHP vs C#
        echo "In PHP we dont need any extra keywords in defining float data types:" . 20.5;
        echo "<br>";
        echo "Unlike with c# we need to define a float:" . '20.5f';

    ?>
    <hr>


    <h2>Adding line breaks in PHP- hypertext preprocessor</h2>
    <?php 
        echo nl2br("if you view the page source \n you'll find a new line in this string"); 
        echo "<br>";
        echo ("if you view the page source \n you'll find a new line in this string"); 
        echo "<br>";
    ?>

        <hr>

    <h2>Boolean in PHP - Hypertext Preproccessor</h2>
    <?php 
         $a = true;
         if($a === true){
            echo "Variable a is equal to true";
         }
    ?>
<hr>
    <h2>Declaring Variable in PHP</h2>
    <?php 
    echo"<h3>Rules in declaring variables</h3>";
    echo "
    <ul>
         <li>Don't start you variable name with a number.</li>
         <li>A Variable name can start with a letter and an underscore.</li>
         <li>It cannot start with a number</li>
         <li>It is Case Sensitive.</li>
         <li>A variable name can only have alphanumeric characters.</li>
    </ul>";
    ?>
<hr>
    <?php 
    print "<h2>Coding Challenge for Variables</h2>";


    //Declare a variable and assign a value of string data type.
    echo "<p>Declare a variable and assign a value of string data type.</p>";
   $name = "Aldrien";

    echo "I am " . $name . " Allanigue";
    echo "<br>";
    //Declare a variable and assign number data type
    $number = 23;
    echo "My age is " .$number;
    echo "<br>";
    //Declare a variable and assign a boolean data type
    
    $a = 3;
    if($a === 1){
        echo "You're number one in my heart";
    }else if ($a != 1){
        echo ("You're number two(false)");
    }
    echo "<br>";
    //Declare a variable and assign float data type
1   ;
   $float = 3.45;

   echo "The float number is " . $float;
    echo "<hr>";

    echo "<h2>Constant in PHP</h2>";

    const pi=3.14;
    const ball_height = 5;
    const ball_width = 5;
    echo pi;
    echo "<br>";
    echo "The ball height is " .ball_height;
    echo "<br>";
    echo "The ball width is " . ball_width;
    echo "<br>";
    ?>
</section>
<hr>
<section>
    <h2>Expression in PHP - Hypertext Preprocessor</h2>
    <li>Operatos</li>
    <li>Condition</li>
    <li>Loops</li>

    <hr>

    <h2>Operators in PHP - Hypertext Preprocessor</h2>

    <li>Assignment Operators</li>
    <li>Arithmetic Operators</li>
    <li>Comparison Operators</li>
    <li>Increment/Decrement Operators</li>
    <li>Logical Operators</li>
    <li>String Operators</li>
    <li>Array Operators</li>
    <li>Conditional Assignment Operators</li>
    <li>Operator Precedence</li>
    <li>Error Control Operators</li>
    <li>Execution Control Operators</li>
    <li>Type Operators</li>
    <li>Bitwise Operators</li>
    
    <hr>
    <?php
        $num1 = 1;
        $num2 = 2;
        $sum;
        $product;
        $difference;
        $quotient;


        echo "<h2> Arithmetic Operators in PHP - Hypertext Preprocessor</h2>";
        $sum = $num1 + $num2;
        echo "The sum is " . $sum;
        echo "<br>";
        $product = $num1 * $num2;
        echo "The product is " . $product;
        echo "<br>";
        $difference = $num1 - $num2; 
        echo "The difference is " . $difference;
        echo "<br>";
        $quotient = $num1 / $num2;
        echo "The quotient is " . $quotient;
    ?>
    <hr>
        <h2>Assignment Operators in PHP - Hypertext PreProcessor</h2>

        <?php 

        $num1 += $num2;  // shorthand for $num1 = $num1 + $num2;

        // This assignment operator is the same as 1 + 2 which is a shorthand for $num1= $num1 +$num2;
        echo $num1; // Num 1 now has a value of 3
        echo "<br>";
        $num1 += $num2 ;
        print $num1; // We re-assign the value and added 3 to 2
        ?>
    <hr>

    <h2>Comparison Operators in PHP - Hypertext Preprocessor</h2>
    <?php
       $num1 == $num2;
       $num1 === $num2; // strict comparison operators
       $num1 != $num2;
       $num1 !== $num2; //strict comparison operatos
       $num1 < $num2;
       $num1 > $num2;
       $num1 <= $num2;
       $num1 >= $num2;
       $num1 <=> $num2; 
    ?>

    <?php
        $num1 = 1;
        $num2 = "1";

        // $num1 == $num2;
        // $num1 === $num2;
        echo "Variable \$num1 is an example of an integer.!";
        echo "<br>";
        echo gettype($num1);
        echo "<br>";
        echo "Variable \$num2 is an example of a string.!";
        echo "<br>";
        echo gettype($num2);
        echo "<br>";


        echo "<p>\$num1 with an assigned value of 1 , is not equal to \$num2 with assign value of '1'</p>";
        if ($num1 !== $num2){
            echo "This is an example of comparing two data types that are not equal to one another";
        }

        $num3 = "1";
        $num4 = 4;
        $num5 = "4";

        echo "<br>";
        echo gettype($num4);
        echo "<br>";
        echo gettype($num5);
        echo "<br>";
        echo "<br>";
        if ($num4 != $num5){
            echo "This will not printed out";
        }else
        {
            echo "This gets printed because num4 & num5 are not equal to one another";
        }


        $num6 = 4;
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
       
        echo "<hr>";

        echo "<h3>Greater than or less  than comparison operatos </h3>";

        $num1 = 1;
        $num2 = 2;
        $num3 = 2;
        $num4 = 4;
        $num5 = 5;
        $num6 = 5;

        // > greather than
        // < less than

        if($num1 < $num2 ){
            echo "num1 is less than num2";
        }


        echo "<br>";

        if($num3 <= $num2){
            echo "num3 is less than or equal to num2";
        }

        echo "<br>";
        if($num5 >= $num6){
            echo "num 5 is greather than or equal num6";
        }

echo "<hr>";
        echo "<h3> Spaceship Comparison Operator</h3>";

        $num1 =1;
        $num2 =3;
        $num3 =3;

        if($num1 <=> $num2){
            print "If the one on the right
            is greather than the number on 
            the left this should return -1.";
        }


        echo "<br>";
        print( $num1 <=> $num3);

        echo "<br>";
        print( $num2 <=> $num3); // this should produce a value of 0


        // if($num2 <=> $num3){
        //     print "If both numbers are equal to one another this should return 0.";
        // }
        echo "<br>";
        print( $num2 <=> $num1); // this should produce a value of positive 1.
        


        echo "<hr>";
        echo "<h3> Logical Operator: LOGICAL AND &&</h3>";

        $num1 = 5;
        $num2 =10;

        
        if($num1 === 5 and $num2 === 10){
            echo "This is the AND operator in action";
            echo "<br>";
        }


        if($num1 === 5 && $num2 === 10){
            echo "This is the && shorthand for the and operator in action";
            echo "<br>";
        }

        echo "<hr>";
        echo "<h3> Logical Operator: OR || </h3>";

        if($num1 === 5 OR $num2 === 10){
            echo "This is the OR operator in action";
            echo "<br>";
        }


        if($num1 === 5 || $num2 === 10){
            echo "This is the || shorthand for the OR operator in action";
            echo "<br>";
        }


        echo "<hr>";
        echo "<h3> Logical Operator:XOR </h3>";

        $num1 = 10;
        $num2 = 20;
        $num3 = 5;
        $num4 = 6;
        
        if($num1 === 10 XOR $num2 === 5){
            $result = $num1 === 10 XOR $num2 === 20;
            echo "<br>";

            echo "true xor false";
            echo "<br>";

            echo " if one of these value aare true display this text";
            echo "<br>";
            echo $result ? "true" : "false";
        };

        echo "<hr>";
        echo "<h3> Logical Operator:NOT EQUAL </h3>";

        $num1 = 100;

        var_dump($num1 !== 100);
        echo "<br>";
        var_dump($num1);

        echo "<br>";
        echo "<br>";

        echo "<h2> INCREMENT AND DECREMENT OPERATORS IN PHP  </h2>";

        $num1 = 9;
        // $num1++;
        // var_dump($num1++);
        ++$num1;
        var_dump(++$num1);

        echo "<br>";

        $num1 = 9;
        // $num1--;
        // var_dump($num1--);
        --$num1;
        var_dump(--$num1);

        echo "<br>";
        echo "<br>";

        echo "<h2>STRING OPERATORS IN PHP  </h2>";
        
        $a = "My name ";
        $b = "is Aldrien Allanigue!";
        $c = $a . $b;

        echo $a; 

        echo "<br>";
        echo "<br>";

        echo $b;

        echo "<br>";
        echo "<br>";

        echo $c;


        echo "<br>";
        echo "<br>";

        $g = "My name is ";
        $h = $g. "Aldrien Allanigue";
        echo $h;


    ?>
</section>
<hr>
        <section>
            <h2>CONTROL STRUCTURES</h2>
            <?php
            echo "<h3> CONDITIONAL STATEMENTS</h3>";

            echo "<h4>If Statement</h4>";

            /*
              if(){
              code
              };
              */

            echo "if(){";
            echo "<br>";
            echo  "code";
            echo "<br>";
            echo "};";

            $a = 20;
            $b = 5;
            echo "<br>";
            if($a === $b){
                echo "Variable \$a is the same value with variable \$b";
            }elseif($b ===5){
                echo "Variable \$b is equal to 5";
            }
            else{
                echo "They are NOT the same";
            }

            echo "<hr>";
            echo "<h4>Switch Statement</h4>";

            $a =50;
            switch($a){//This is our condition
                case 50; //This is the first value we check if it is true
                echo "Variable is equal to 50!!"; // our code that we want to display if the value it true
                break; //we add the break statement to add a break to our code when we write our switch cases
                case 100;
                echo "Variable is equal to 100!";
                break;
                default: // this is the same feature as the else statement 
                echo "Did not find the equal value";

            }// END OF SWITCH STATEMENT
            
            echo "<br>";
            echo "<h4>IF Statement</h4>";
            
            $a = true ;
            if ($a === true){
                echo "variable is true";
            }elseif($a === false){
                echo "variable is false";
            }

            echo "<br>";
            echo "<h4>LOOPS Statement</h4>";
            
            // $a = 20;
            // $b = 20;

            // if(a===$b){
            //     echo "These values are the same";
            // }

            echo "<br>";
            echo "<h4>While LOOPS Statement</h4>";
            
            $a = 0;
            $b = 10;
            while($a < $b){
            echo "Keep looping this";
            echo "<br>";
            $a++ ;         
        }
            echo "<br>";
            echo "<h4> INFINITE LOOP <span style = 'color:red;'>THIS IS BAD</span></h4>";
            echo "while (true === true){";
            echo "<br>";
            echo "echo 'this will continuos to run FOREVER!!'<span style = 'color:red;'> DONT DO THIS! </span> ";
            echo "}";

            echo "<br>";
            echo "<h4> DO WHILE LOOPS</h4>";
            $a = 5;
            do{
                echo "Loop number" . $a++;
                echo "<br>";
            }while ($a <= 10);


            echo "<br>";
            echo "<h4> FOR LOOPS</h4>";

            for($i = 0; $i < 10; $i++){ // $i meaning for iteration
                echo "This should run 10 times";
                echo "<br>";
                echo "<br>";
            }

            echo "<br>";
            echo "<h4> FOR EACH LOOPS</h4>";

            $array = ["aldrien","santiago","allanigue","aldrien","santiago","allanigue","allanigue","aldrien"];

            foreach( $array as $value){
                echo $value;
                echo "<br>";
            };



            //ASSOCIATIVE ARRAYS
            echo "<br>";
            echo "<br>";
            $person1 = [
            "First Name" => "Aldrien",
            "Last Name" => "Allanigue",
            "Middle Name" => "Santiago"
            ];

            foreach($person1 as $key => $value){
                echo $key . ":" . $value;
                echo "<br>";
            }

            ?>
        </section>
        <br>
<hr>
        <section>
            <?php 
            echo "<h2>BREAK AND CONTINOUS STATEMENT</h2>";
            $a = 1;
            while( $a<=10){
                if($a === 5){
                    break;
                }//end of if statement
                echo $a++;
                echo "<br>";
            }//end of while loop
            
            echo "<br>";

            //NESTED STATEMENTS
            echo "<h2>NESTED WHILE LOOP</h2>";
            $a = 1;
            while($a++){
            echo $a;
            while($a >=10){
                echo "<br>";
                break 2; // if you give 1 value it will crash your browser
            }
            
            echo "<br>";
            echo "<br>"; 
            }//end of while loop
            
            echo "<br>";
            echo "<h2>Continue Statements</h2>";
            // ITERATION meaning
            // When we are doing loops we are having ITERATIONS
            // Each time we LOOP we call that ITERATION
            // BREAK STATEMENT WE ARE STOPPING the LOOP vs the SWITCH STATEMENT we are SKIPNG
            // BREAK = STOP , CONTINUOE = SKIP

            $a = 1;
            while($a <10){
                $a++;
                if( $a ===5 ){
                    continue;
                }
                echo $a;
                echo "<br>";
            }
            ?>
        </section>


        <section>
            <h2>INCLUDE AND REQUIRE</h2>
       <?php
       include_once '../includes/test2.php';
       echo "<br>";
       echo $apple;
       echo "<br>";
       echo $b;
       echo "<br>";
       ?>
        </section>
        

        <hr>
        <section>
        <h2>Visibility and Inheritance</h2>
            <?php

            include_once '../includes/player.php';
            $pet01 = new Pet();
            echo $pet01->owner(); // method owner from the PET class is private --> that is why we are gettin a uncaught error

            ?> 

        </section>
   



<?php
         include_once 'footer.php';
    ?>



</main>















    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!This is an example of REACT embeded on a php file!</h1>;
      }

      ReactDOM.render(<Hello />, document.getElementById('mydiv'))
    </script>

</body>
</html>