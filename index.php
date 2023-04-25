

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Object Oriented Programming With PHP</title>
</head>
<body>
    <h1> OOP - Object Oriented Programming With PHP</h1>

    <p>Compared to other OOP languages (Object Oriented Programming) PHP is much
        easier compared to some programming languages.
    </p>
    
    <p>C# , Python , Java and Ruby</p>

    <p>PHPS and higher</p>

    <h2>WHY USE OBJECT ORIENTED PROGRAMMING IN HYPERTEXT PREPROCESSOR?</h2>

    <ul>
        <li>OOP is faster and easier to execute.</li>
        <li>Provideing a clear structure for your programs.</li>
        <li>Practice DRY "DON'T REPEAT YOURSELF", we write code that is lot easier
            to maintain and debug</li>
        <li>Create Reusable Applications</li>
        <li>Companies want OOP</li>
        <li>Better for group work</li>
        <li>Better organize or code</li>
        <li>Medium - Large Website</li>
    </ul>

<hr>

    <h2>MVC Model</h2>
    <h3>TASKS OF PHP</h3>
    <ol>
        <li>Query and connect to db</li>
        <li>Get input from users</li>
        <li>Display things on the website</li>
    </ol>


    <?php 
    //  class Fruit {
    //     // Properties
    //     public $name;
    //     public $color;


    //     // Methods
    //     function setName($name){
    //         $this->name = $name;
    //     }

    //     function getName(){
    //         return $this->name;
    //     }
    //  }

    //  $apple = new Fruit();
    //  $banana = new Fruit();

    //  $apple ->setName('Apple');
    //  $banana ->setName('Banana');

    //  echo $apple->getName();
    //  echo "<br>";
    //  echo $banana->getName();

    // Call using browser when the user clicks on something
    // Call or invoke a function inside of out script or code
    ?>


<br>
<br>
<br>


<?php

echo "<hr>";
echo "<h2>FirstClass Example from includes folder</h2>";
include_once './includes/FirstClass.php';

?>

<hr>

<h2>CONSTRUCTS</h2>



<?php
     class Fruit {
        // Properties
        public $name;
        public $color;


        // Methods
        function __construct($name){
            $this->name = $name;
        }

        function getName(){
            return $this->name;
        }
     }

     $apple = new Fruit('Apple');
     $banana = new Fruit('banana');

     echo $apple->getName();
     echo "<br>";
     echo $banana->getName();

    // Call using browser when the user clicks on something
    // Call or invoke a function inside of out script or code
    ?>


<h3>CODING CHALLENGE</h3>

<?php
// connection from the construct.php
 include './Construct.php';

 //echo an instance of CAR OBJECT HERE
 
 echo $civic->getModel();
 echo "<br>";
 echo $red->getColor();
?>

<hr>



</body>
</html>

    <!-- <script>
        setTimeout(() => {
            
        }, timeout);
    </script> -->