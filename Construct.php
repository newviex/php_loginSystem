<?php

class car{
    // Properties 
    public $model;
    public $color;

    //Methods
    // Set up a function declaration to set model

    function setModel($model){
        $this->model = $model;
    }

    function setColor($color){
        $this->color = $color;
    }



    // Refactor this into a constructor

  
    
    // set up a function declaration to get model
 function getModel(){
   return $this->model;
 }
   
 function getColor(){
    return $this->color;
 }

}
    
// CREATE AN INSTANCE OF THE OBJECT
$civic = new car();
$civic->setModel('civic');

$red = new car();
$red ->setColor('red');




// Connect to index.php