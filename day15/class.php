<?php
    class car{
        public $color;
        public $model;
        public function __construct($color,$model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "My car is a ".$this->color." ".$this->model."!";
        }
    }
    $myCar = new car("black","volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new car("blue","porche");
    echo $myCar->message();
    echo "<br>";
    $myCar = new car("white","G-Wagon");
    echo $myCar->message();
    echo "<br>";
    $myCar = new car("grey","Urus");
    echo $myCar->message();
    echo "<br>";
    $myCar = new car("silver","Rolls Royce Phantom");
    echo $myCar->message();
?>