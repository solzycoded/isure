<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Models\InsurancePolicy as ModelsInsurancePolicy;

class Insurance extends TestCase
{
    public function getInsurance(){
        $policyNames = ['car', 'home', 'life'];
        $insurance = ModelsInsurancePolicy::filter(['name' => $policyNames[rand(0, (count($policyNames) - 1))]])->first();

        return $insurance;
    }
}
