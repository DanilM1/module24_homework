<?php

interface Move_go {
    public function to_go();
}

interface Move_back {
    public function to_go();
}

interface Signal {
    public function signal();
}

interface Dipper {
    public function dipper();
}

interface Gas {
    public function gas();
}

interface Food {
    public function food();
}

class Car implements Move_go, Move_back, Signal, Gas {

    public $wheels = 4;
    public $skin = false;

    public function skin() {}
}

class Horse implements Move_go, Food {public $legs = '3||5';}

class Cat implements Move_go, Move_back, Signal, Food {public $legs = 5;}

class Digger implements Move_go, Move_back, Signal, Dipper, Gas {public $chains_move_walk = 2;}

class Bike implements Move_go, Signal {public $wheels = 2;}

?>