<?php

class Pickeman extends Unit
{
    protected $point = 5;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getPoints(){

        return $this->point;

    }

    public function setPoints($points){

        $this->point += $points;

    }


}