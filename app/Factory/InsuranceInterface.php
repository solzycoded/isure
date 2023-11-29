<?php

namespace App\Factory;

use App\Models\InsuranceCover;

interface InsuranceInterface{
    public function createInsurance();
    public function createInsuranceClause(InsuranceCover $insuranceCover);
}