<?php

namespace App\Factory;

use App\Models\InsuranceClauseReference;
use App\Models\InsurancePolicy;
use App\Models\InsuranceCover;
use App\Models\InsuranceCoverClause;

// The class implements the Insurance interface
abstract class Insurance implements InsuranceInterface{
    private array $attributes;
    public InsurancePolicy $insurancePolicy;
    private int $insurancePolicyId;
    public string $type;

    public function __construct($attributes) {
        $this->attributes        = $attributes;
        $this->insurancePolicy   = new InsurancePolicy();
        $this->insurancePolicyId = InsurancePolicy::filter(['name' => $this->type])->first()->id;
    }

    public function createInsurance(){
        return $this->insurancePolicy->insuranceCovers()->firstOrCreate([
            'insurance_policy_id' => $this->insurancePolicyId,
            'name' => $this->attributes['name'],
            'description' => $this->attributes['description'],
            'premium' => $this->attributes['premium']
        ]);
    }

    public function createInsuranceClause(InsuranceCover $insuranceCover){
        // insurance cover clause
        foreach ($this->attributes['clause_list'] as $clause) {
            $insuranceClause = InsuranceCoverClause::firstOrCreate([
                'insurance_cover_id' => $insuranceCover->id,
                'title'              => $clause['name']
            ]);

            // create insurance options
            $this->createInsuranceClauseReference($clause['conditions'], $insuranceClause->id);
        }
    }

    private function createInsuranceClauseReference($conditions, $clauseId){
        foreach ($conditions as $condition) {
            InsuranceClauseReference::firstOrCreate([
                'header' => $clauseId,
                'option' => $condition
            ]);
        }
    }
}