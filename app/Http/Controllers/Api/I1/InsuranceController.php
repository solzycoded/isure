<?php

namespace App\Http\Controllers\Api\I1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\UpdateInsurancePolicyRequest;
use App\Http\Resources\InsurancePolicyResource;
use App\Models\InsurancePolicy;

// This api controller holds "update" and "indexing" for the insurance policies (home, car and life insurance)
class InsuranceController extends Controller
{
    // UPDATE
    public function update(UpdateInsurancePolicyRequest $request, InsurancePolicy $insurancePolicy){
        $insurancePolicy->update($request->validated());

        return InsurancePolicyResource::make($insurancePolicy);
    }

    // READ
    public function index(){
        $insurancePolicies = InsurancePolicy::all();

        return InsurancePolicyResource::collection($insurancePolicies);
    }
}
