<?php


class Archer extends Unit
{
    protected $point = 10;

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