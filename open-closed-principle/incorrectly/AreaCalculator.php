<?php

namespace incorrectly;

class AreaCalculator
{

    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];

        foreach ($this->shapes as $shape) {
            if ($shape instanceof Square) {
                $area[] = $shape->length ** 2;
            } else if ($shape instanceof Rectangle) {
                $area[] = $shape->width * $shape->height;
            }
        }

        return array_sum($area);
    }
}