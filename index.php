<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our First Php Script</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
  <header>
    <div class="header">
        <?php
            echo"My first PHP Script with double quote";
            echo "<br>";
            echo'My first PHP Script with single quote';
        ?>
    </div>
  </header>

  <hr>

  <section>
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
        echo "<h3> Logical Operator</h3>";


    ?>
</section>


    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!This is an example of REACT embeded on a php file!</h1>;
      }

      ReactDOM.render(<Hello />, document.getElementById('mydiv'))
    </script>

</body>
</html>