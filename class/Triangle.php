<?php


class Triangle extends Shape
{

    public $side1;
    public $side2;
    public $side3;
    public $color;

    public function __construct()
    {
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
    }

    public function setSide(float $side1, float $side2, float $side3)
    {

        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }


    public function getSide3()
    {
        return $this->side3;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }


    public function getArea()
    {
        $p = $this->getPerimeter()/2;
        $a = $this->side1;
        $b = $this->side2;
        $c = $this->side3;
        return pow($p * ($p -$a)*($p-$b)*($p-$c), 0.5);
    }

    public function toString() {
        return "Triangle have side1 = ".$this->getSide1().",side2 = ".$this->getSide2().", side3 = ".$this->getSide3()
        .", color : ".$this->getColor()." , perimeter = ".$this->getPerimeter() ." and area = ".$this->getArea();
    }

}