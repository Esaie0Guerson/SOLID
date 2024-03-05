<?php

// Pour respecter le principe OCP, nous pouvons utiliser 
// l'héritage et le polymorphisme pour créer des classes spécifiques 
// à chaque type de forme, et une interface commune pour le calcul d'aire.


interface Shape {
    public function calculateArea();
}
class Circle implements Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
class AreaCalculator {
    public function calculateArea($shapes) {
        $area = 0;
        foreach ($shapes as $shape) {
            $area += $shape->calculateArea();
        }
        return $area;
    }
}

?>