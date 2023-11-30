<?php

namespace Tests\Feature;

class InsurancePolicyTest extends Insurance
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_insurance_policy()
    {
        // get the insurance policy
        $insurance = $this->getInsurance();

        $response = $this->withoutExceptionHandling()->patch('/insurance-policies/' . $insurance->name . '-insurance', [
            'description'          => 'a description that\'s not below 200 words',
            'default_premium'      => 4324.34,
            'terms_and_conditions' => 'these are the terms and conditions for the selected insurance, it can be as long and as large as required',
        ]);

        // "302" is the status code for redirect. if it's successful, it'll send a redirect status, to indicate that it's going back to the insurance policy list
        $response->assertStatus(302);
    }
}
