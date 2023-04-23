<?php
include_once 'header.php';

?>
<main>
    <section>
        <div class="functions">
            <h2>FUNCTION</h2>
            <h3>TWO THINGS TO TAKE NOTE OF WHEN WORKING WITH FUNCTIONS</h3>
            <ol style="text-align:left;">
                <li>Internal Functions - Build in Functions (Methods)</li>
                <li>User Defined Function</li>
            </ol>
            <?php
                 echo "<h2>Built in Functios or Interval Functions to the language</h2>";
                 $a = "Hello World!";
                //  echo $a;
                 echo " <br>";
                 echo str_replace("World", "Aldrien" ,$a);
                 echo " <br>";

                $b = "hi!";
                echo $b;
                echo " <br>";
                $greetings = "Aldrien ";
                echo str_repeat($greetings,3);
                echo " <br>";


                $a ="Hello World";
                 // $char = "He";
                 // $char = "el";
                 $char = "ld";
                echo strpos($a,$char);





                echo "<hr>";
                echo "<h2>User  Defined Functions in PHP - Hypertexte Preprocessor</h2>";
                function displayMessage()
                {
                    echo "Hello world! This is a userDefined function i have created!!";
                }
                displayMessage();



                // function calculateAdd(int $num1, int $num2){
                //     $add =$num1 + $num2;
                //     return $add;
                // }

            ?>
        </div>
    </section>
    <section>
            <div class="form">
                <form action="funcCalc.php" method = "get">
                    <input type="text" name="num1" placeholder="Number1">
                    <select name="operations" >
                        <label for="operations">Arithmetic Operations</label>
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                    </select>
                    <input type="text" name="num2" placeholder="Number2">
                    <button type="submit">Calculate</button>

                </form>
            </div>



    </section>
</main>
<?php
         include_once 'footer.php';
    ?>
