<?php

class car{
    // Properties 
    public $model;


    //Methods
    // Set up a function declaration to set model

    function setModel($model){
        $this->model = $model;
    }



    // Refactor this into a constructor

  
    
    // set up a function declaration to get model
 function getModel(){
   return $this->model;
 }
   

}
    
// CREATE AN INSTANCE OF THE OBJECT
$civic = new car();
$civic->setModel('civic');

echo $civic->getModel();
