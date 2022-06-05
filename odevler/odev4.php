<?php 

interface Shape{
    public function calculateArea();
    public function calculatePerimeter();
}

class Square implements Shape{
    public float $side;

    public function __construct($side){
        $this->side = $side;
    }

    public function calculateArea():float{
        return $this->side * $this->side;
    }

    public function calculatePerimeter():float{
        return 4 * $this->side;
    }
}

class Rectangular implements Shape{
    public float $side1;
    public float $side2;

    public function __construct($side1,$side2){
        $this->side1 = $side1;
        $this->side2 = $side2;
    }
    
    public function calculateArea():float{
        return $this->side1 * $this->side2;
    }

    public function calculatePerimeter():float{
        return 2 * ($this->side1 + $this->side2);
    }
}

class Triangle implements Shape{
    public float $height;
    public float $base;

    public function __construct($height,$base){
        $this->height = $height;
        $this->base = $base;
    }

    public function calculateArea():float{
        return ($this->height * $this->base) / 2;
    }

    public function calculatePerimeter():float{
        $side = sqrt(($this->height ** 2 + ($this->base/2)**2));
        return ($this->side*2) + $this->base;
    }
}

$rectangular = new Rectangular(1,2);
echo 'Dikdortgen Alan : ' . $rectangular->calculateArea() . '<br/>';
echo 'Dikdortgen Cevre : ' . $rectangular->calculatePerimeter() . '<br/>';

$square = new Square(2);
echo 'Kare Alan : ' . $square->calculateArea() . '<br/>';
echo 'Kare Cevre : ' . $square->calculatePerimeter() . '<br/>';

$triangle = new Triangle(4,5);
echo 'Dik Ucgen Alan : ' . $triangle->calculateArea() . '<br/>';
echo 'Dik Ucgen Cevre : ' . $triangle->calculatePerimeter() . '<br/>';


