<?php


class Army
{

    protected $coin = 1000;
    
    protected $name;
    protected $Archer;
    protected $Pickeman;
    protected $Knight;

    public function __construct(Archer $archer, Pickeman $pickeman, Knight $knight)
    {
        $this->Archer = $archer;
        $this->Pickeman = $pickeman;
        $this->Knight = $knight;
    }

    public function getMoney(){

        return $this->coin;

    }

    public function setMoney($coins){

        $this->coin += $coins;

    }


    public function attack(Army $army)
    {

    }

    public function training(Unit $unit){

        if ($unit instanceof Knight){

            $this->coin += -30;

            $unit->setPoints(10);

        }

        if ($unit instanceof Archer){

            $this->coin += -20;

            $unit->setPoints(7);

        }

        if ($unit instanceof Pickeman){

            $this->coin += -10;

            $unit->setPoints(3);

        }

    }

   

}