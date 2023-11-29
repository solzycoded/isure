<?php

namespace App\Facade;

// This class implements the FACADE pattern
class InsuranceLister
{
    private Car $car;
    private Home $home;
    private Life $life;

    public function __construct() {
        $this->car = new Car();
        $this->home = new Home();
        $this->life = new Life();
    }

    public function getHomeInsurancePolicies(){
        return $this->home->listInsuranceCovers();
    }

    public function getLifeInsurancePolicies(){
        return $this->life->listInsuranceCovers();
    }

    public function getCarInsurancePolicies(){
        return $this->car->listInsuranceCovers();
    }
}