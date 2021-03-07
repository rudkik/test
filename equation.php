<?php

class equation{
    private $b;
    private $a;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Result(){
        echo "Сложение = " . $this->sum();
        echo "Вычетание = " . $this->min();
        echo "Деление = " . $this->div();
        echo "Умножение = " . $this->multi();


}
    private function sum(){
        return  ($this->a + $this->b);

    }
    private function min(){
        return  ($this->a - $this->b);
    }
    private function multi(){
        return  ($this->a * $this->b);

    }
    private function div(){
        return  ($this->a / $this->b);
    }
}
