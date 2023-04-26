<?php

class PlayerName{
    // PROPERTIES 
    protected $first = "Aldrien ";
    protected $last = "Allanigue";
    private $age = "23";

    public function owner(){
        $a = $this->first . "!";
        return $a;

    }

}

class Pet  extends PlayerName{
    // we set up here a method
    // public function owner(){
    //     $a = "Hi there! I am a pet owner ";
    //     return $a;
    // }


    public function owner(){
        $a = "Hi there! I am a pet owner " . $this->first . $this->last . "!";
        return $a;
    }
}
