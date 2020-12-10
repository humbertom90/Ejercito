<?php

class Knight extends Unit
{
    protected $point = 20;

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