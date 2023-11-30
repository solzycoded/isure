<?php

namespace Tests\Feature;

use Illuminate\Support\Str;

class InsuranceCoverTest extends Insurance
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_insurance_cover()
    {
        // get the insurance policy
        $insurance = $this->getInsurance();

        $response = $this->withoutExceptionHandling()->post('/api/i1/insurance-policy-covers', $this->createNewInsuranceCover($insurance->name));

        // "200" is the status code for okay. if it's successful, it'll send a OK status, to indicate that the new insurance cover was successfully created
        $response->assertStatus(200);
    }

    private function createNewInsuranceCover($type){
        return [
            'name'          => Str::random(30),
            'description'   => fake()->text(300),
            'premium'       => 7000,
            'type'          => $type,
            'clause_list'   => $this->createClause()
        ];
    }

    private function createClause(){
        $clauseList = [];

        for ($i=0; $i < 4; $i++) { 
            $clauseList[$i] = ['name' => fake()->title(), 'conditions' => $this->createConditions()];
        }

        return $clauseList;
    }

    private function createConditions(){
        $conditions = [];

        for ($i=0; $i < 9; $i++) { 
            $conditions[] = Str::random(40);
        }

        return $conditions;
    }
}
