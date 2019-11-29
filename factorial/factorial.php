<?php

class Factorial{
    public $number = null;
    public $array = [];

    public function setInput():?int{
        $user_input = (int) round(readline("Number: "));
        $this->number = $user_input;
        return $this->number;
    }

    public function validateInput(int $input):?bool{
        if ($input <= 0) {
            exit("Cannot compute factorial for zero or negative numbers.");
        }else{
            return true;
        }
    }

    public function factorize($number, &$array){
        array_push($array, $number);
        while($number != 0){
            $number -= 1;
            array_push($array, $number);
        }
        array_pop($array);
    }

    public function getResult(array &$array):void{
        $result = (float) 1;
        foreach($array as $factor){
            $result = $result * $factor;
        }
        echo($result);
        $this->number = null;
        $this->array = [];
    }

    public function runner(){
        if ($this->validateInput($this->setInput())) {
            $this->factorize($this->number, $this->array);
            $this->getResult($this->array);
            exit("\nExiting.");
        }
    }
}
$factor = new Factorial;
$factor->runner();