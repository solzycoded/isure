<?php

namespace App\Facade;

use App\Models\InsurancePolicy;

// the "insurance" object implements an interface, which holds the listInsuranceCovers. The "home", "car" or "life" insurance objects, inherit from this
abstract class Insurance implements InsuranceInterface{
    public InsurancePolicy $insurancePolicy;
    public string $type;

    public function __construct() {
        $this->insurancePolicy = InsurancePolicy::filter(['name' => $this->type])->first();
    }

    public function listInsuranceCovers()
    {
        return $this->insurancePolicy->insuranceCovers;
    }
}