<?php

abstract class Vehicle {

    public $signal = 'be-beep';

    abstract function to_go();
    abstract function to_back();
    abstract protected function speed();
    abstract protected power();

    public function star() {
        echo 'Gold Star';
    }

}

class Car extends Vehicle {

    public to_go = 'go';
    public to_back = 'back';
    public gas = 'electricity';
    public skin = true;
    public speed = 230;
    public power = 4;
    public company = 'MD';

    public function price() {}

    public function skinAlways() {}

    public function gas() {}

    public function to_go() {}

    public function to_back() {}

    public function speed() {}

    public function power() {}

    public function company() {}

}

class Panzer extends Vehicle {

    public to_go = 'forward';
    public to_back = 'return';
    private speed = 23;
    private power = 40;
    private company = '_';

    private function gun() {}

    private function gas() {}

    public function to_go() {}

    public function to_back() {}

    protected function speed() {}

    protected function power() {}

    private function company() {}

}

class Digger extends Vehicle {

    public to_go = 'move';
    public to_back = 'revers';
    protected gas = 'combine';
    protected speed = 23;
    protected power = 7;
    protected company = 'D_M_';

    protected function dipper() {}

    protected function gas() {}

    public function to_go() {}

    public function to_back() {}

    protected function speed() {}

    protected function power() {}

    public function left() {}

    public function right() {}

    protected function company() {}

}

?>