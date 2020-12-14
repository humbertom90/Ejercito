<?php


class Army
{

    protected $coin = 1000;

    protected $Archer;
    protected $Pickeman;
    protected $Knight;

    public function __construct(Civilization $civilization)
    {

        if ($civilization instanceof Chinese){

            $this->Archer = 25;
            $this->Pickeman = 2;
            $this->Knight = 2;

        }

        if ($civilization instanceof English){

            $this->Archer = 10;
            $this->Pickeman = 10;
            $this->Knight = 10;

        }

        if ($civilization instanceof Byzantines){

            $this->Archer = 8;
            $this->Pickeman = 5;
            $this->Knight = 15;

        }

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

    public function transformation(Unit $unit){



        if ($unit instanceof Archer){

            $this->coin += -40;

            $unit->setPoints(20);

        }

        if ($unit instanceof Pickeman){

            $this->coin += -30;

            $unit->setPoints(10);

        }

    }
   

}