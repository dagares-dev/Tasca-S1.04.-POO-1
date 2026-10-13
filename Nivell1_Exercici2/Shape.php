<?php
/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
*/
declare (strict_types=1);

class Shape {
 protected float $width;
 protected float $height;

 public function __construct(float $width, float $height) {
    $this->width = $width;
    $this->height = $height;
}
}

class Rectangle extends Shape {
    public function area() : float{
        return $this->width * $this->height;
    }
}
class Triangle extends Shape {
    public function area() : float{
        return $this->width * $this->height / 2;
    }
}



