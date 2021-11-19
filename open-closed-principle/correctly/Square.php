<?php

class Square implements Shape
{
    private $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return $this->length ** 2;
    }
}