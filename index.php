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





</section>

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!This is an example of REACT embeded on a php file!</h1>;
      }

      ReactDOM.render(<Hello />, document.getElementById('mydiv'))
    </script>

</body>
</html>