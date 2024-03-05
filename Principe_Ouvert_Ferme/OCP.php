<?php 

//elle viole le principe OCP car elle doit être modifiée 
// chaque fois qu'une nouvelle forme géométrique est ajoutée. 
// Cela rend le code fragile et difficile à maintenir.

class Shape {
    public $type;
    public function __construct($type) {
        $this->type = $type;
    }
}

class AreaCalculator {
    public function calculateArea($shapes) {
        $area = 0;
        foreach ($shapes as $shape) {
            if ($shape->type == 'circle') {
                $area += pi() * pow($shape->radius, 2);
            } elseif ($shape->type == 'rectangle') {
                $area += $shape->width * $shape->height;
            }
        }
        return $area;
    }
}

?>